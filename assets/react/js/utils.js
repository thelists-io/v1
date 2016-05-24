var app = app || {};

(function () {
    'use strict';

    app.Utils = {
        uuid: function () {
            /*jshint bitwise:false */
            var i, random;
            var uuid = '';

            for (i = 0; i < 32; i++) {
                random = Math.random() * 16 | 0;
                if (i === 8 || i === 12 || i === 16 || i === 20) {
                    uuid += '-';
                }
                uuid += (i === 12 ? 4 : (i === 16 ? (random & 3 | 8) : random))
                        .toString(16);
            }

            return uuid;
        },
        pluralize: function (count, word) {
            return count === 1 ? word : word + 's';
        },
        
        getMenus: function() {
            var category_id = $('#category_id').val();
            var store = '';
            $.ajax({
                url: '/lists/menu_list/' + category_id,
                type: 'GET',
                async: false,
                dataType: 'json',
                success: function (data) {
                    store = JSON.stringify(data);
                }
            });
            
            return (store && JSON.parse(store)) || [];
        },
        
        store: function (namespace, data, cID) {
            
            var store = '';
            var currentCategoryName = '';
            var response = '';
            if (data) {
                $.ajax({
                    url: '/lists/save_list',
                    type: 'POST',
                    data: {list: data},
                    success: function (data) {

                    }
                });
                return true;
            }
            var category_id = (typeof cID == 'undefined') ? $('#category_id').val() : cID;
            var $this = this;
            
            $.ajax({
                url: '/lists/get_list',
                type: 'POST',
                async: false,
                data: {category_id: category_id},
                dataType: 'json',
                success: function (data) {
                    $.each(data.lists, function( index, value ) {                 
                        value.completed = ($this.getStorageData('todo_' + value.id) == 'true') ? true : false;
                    });
                    store = data.lists;
                    currentCategoryName = data.category_name;
                    response = [currentCategoryName, store];
                    response = JSON.stringify(response);
                }
            });
            
            return (response && JSON.parse(response)) || [];
        },
        
        
        getStorageData: function(key) {
            var value = localStorage.getItem(key);
            return value;
        },
        
        setStorageData: function(key, value) {
            localStorage.setItem(key, value);
        },
        
        extend: function () {
            
            var newObj = {};
            for (var i = 0; i < arguments.length; i++) {
                var obj = arguments[i];
                for (var key in obj) {
                    if (obj.hasOwnProperty(key)) {
                        newObj[key] = obj[key];
                    }
                }
            }
            return newObj;
        }
    };
})();
