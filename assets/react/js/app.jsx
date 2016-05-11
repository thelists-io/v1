/*jshint quotmark:false */
/*jshint white:false */
/*jshint trailing:false */
/*jshint newcap:false */
/*global React, Router*/
var app = app || {};

(function () {
	'use strict';

	app.ALL_TODOS = 'all';
	app.ACTIVE_TODOS = 'active';
	app.COMPLETED_TODOS = 'completed';
	var TodoFooter = app.TodoFooter;
	var TodoItem = app.TodoItem;
	var TodoMenu = app.TodoMenu;
	var TodoSocialLink = app.TodoSocialLink;

	var ENTER_KEY = 13;

	var TodoApp = React.createClass({
		getInitialState: function () {
			return {
				nowShowing: app.ALL_TODOS,
				editing: null,
				newTodo: ''
			};
		},

		componentDidMount: function () {
			var setState = this.setState;

			var router = Router({
				'/': setState.bind(this, {nowShowing: app.ALL_TODOS}),
				'/active': setState.bind(this, {nowShowing: app.ACTIVE_TODOS}),
				'/completed': setState.bind(this, {nowShowing: app.COMPLETED_TODOS})
			});
			router.init('/');
		},

		handleChange: function (event) {
			this.setState({newTodo: event.target.value});
		},

		handleNewTodoKeyDown: function (event) {
			if (event.keyCode !== ENTER_KEY) {
				return;
			}

			event.preventDefault();

			var val = this.state.newTodo.trim();

			if (val) {
				this.props.model.addTodo(val);
				this.setState({newTodo: ''});
			}
		},

		toggleAll: function (event) {
			var checked = event.target.checked;
			this.props.model.toggleAll(checked);
		},

		toggle: function (todoToToggle) {

			this.props.model.toggle(todoToToggle);
		},

		destroy: function (todo) {
			this.props.model.destroy(todo);
		},

		edit: function (todo) {
			this.setState({editing: todo.id});
		},

		save: function (todoToSave, text) {
			this.props.model.save(todoToSave, text);
			this.setState({editing: null});
		},

		cancel: function () {
			this.setState({editing: null});
		},

		clearCompleted: function () {
			this.props.model.clearCompleted();
		},

                clickCategory: function(categoryId) {
                    this.props.model.loadResults(categoryId);
                    this.setState({editing: null});
                },

		render: function () {
			var footer;
			var main;
			var todos = this.props.model.todos;
                       
                        var menuItems = <TodoMenu 
                                                menus={this.props.model.menus} 
                                                selectedCategory={this.props.model.selectedCategory} 
                                                clickCategory={this.clickCategory}
                                        />

                        var socialItems = <TodoSocialLink 
                                            socialLink={this.props.model.socialLink} 
                                        />
                                        
			var shownTodos = todos.filter(function (todo) {
				switch (this.state.nowShowing) {
				case app.ACTIVE_TODOS:
					return !todo.completed;
				case app.COMPLETED_TODOS:
					return todo.completed;
				default:
					return true;
				}
			}, this);

			var todoItems = shownTodos.map(function (todo) {
				return (
					<TodoItem
                                            key={todo.id}
                                            todo={todo}
                                            onToggle={this.toggle.bind(this, todo)}
                                            onDestroy={this.destroy.bind(this, todo)}
                                            onEdit={this.edit.bind(this, todo)}
                                            editing={this.state.editing === todo.id}
                                            onSave={this.save.bind(this, todo)}
                                            onCancel={this.cancel}
					/>
				);
			}, this);

			var activeTodoCount = todos.reduce(function (accum, todo) {
				return todo.completed ? accum : accum + 1;
			}, 0);

			var completedCount = todos.length - activeTodoCount;

			if (activeTodoCount || completedCount) {
				footer =
					<TodoFooter
						count={activeTodoCount}
						completedCount={completedCount}
						nowShowing={this.state.nowShowing}
						onClearCompleted={this.clearCompleted}
					/>;
			}

			if (todos.length) {
				main = (
					<section className="main">
						
						<ul className="todo-list">
							{todoItems}
						</ul>
					</section>
				);
			}

			return (
				<div>
                                    <div className="col-xs-12 col-md-3 hidden-xs">
                                        <div className="sidebar">
                                            <div className="widget-links">
                                                {menuItems}
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-xs-12 col-md-9">

                                        <div className="content">
                                        {socialItems}
                                            <section className="todoapp">
                                                <header className="header">
                                                        <h1>{category_name}</h1>
                                                        <input
                                                            className="new-todo"
                                                            placeholder="Add something to the list"
                                                            value={this.state.newTodo}
                                                            onKeyDown={this.handleNewTodoKeyDown}
                                                            onChange={this.handleChange}
                                                            autoFocus={true}
                                                        />
                                                </header>
                                                {main}
                                            </section>
                                        </div>
                                    </div>
                                </div>
			);
		}
	});

	//var model = new app.TodoModel('react-todos');

	function render(model) {
		React.render(
			<TodoApp model={model} />,
			document.getElementsByClassName('main_container')[0]
		);
	}

        function handleNewHash() {
            var location = window.location.hash.replace(/^#\/?|\/$/g, '').split('/');
            
            location = (location != '') ? location : 0; 

            var model = new app.TodoModel('react-todos', location);
            model.subscribe(function(){render(model); });
            render(model);
        }

        handleNewHash();
        window.addEventListener('hashchange', handleNewHash, false);

})();
