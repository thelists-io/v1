/*jshint quotmark:false */
/*jshint white:false */
/*jshint trailing:false */
/*jshint newcap:false */
/*global React */
var app = app || {};

(function () {
	'use strict';
        
        app.TodoMenuItem = React.createClass({

          render: function() {
            
            var classname = (this.props.id == this.props.selectedCategory) ? 'active' : '';
            return (
                <li className={classname}><a href={'#' + this.props.id} onClick={this.props.onClick} class="renderList" data-category={this.props.id}>{this.props.name}</a></li>         
            );
          }
        });


        var TodoMenuItem = app.TodoMenuItem;

        app.TodoMenu = React.createClass({

            handleClick: function(event) {
                //event.preventDefault();
                var currentItem = $(event.currentTarget);
                var category_id = currentItem.attr('data-category');
                $('#child_category_id').val(category_id);
                this.props.clickCategory(category_id);
            },


          render: function() {

            var categoryName = $('#category_name').val();
            var parentCategoryID = $('#category_id').val();

            var selectedCategory = this.props.selectedCategory;
           
            var className = (!selectedCategory) ? 'active' : '';

            var menuItems = this.props.menus.map(function (menu) {
				return (
                                    <TodoMenuItem
                                        id={menu.id}
                                        name={menu.name}
                                        selectedCategory={selectedCategory}
                                        onClick={this.handleClick}
                                    />
				);
			}, this);

            
            return (
                    <div>
                    <div className="widget-start"><h2>{categoryName}</h2></div>
                    <div className="widget-links">
                        <ul className="nav">
                          <li className={className}><a href="#" onClick={this.handleClick} className="renderList" data-category={parentCategoryID}>{categoryName}</a></li>
                          {menuItems}
                        </ul>
                    </div>
                    </div>
            );
          }
        });

        

})();
