/*jshint quotmark:false */
/*jshint white:false */
/*jshint trailing:false */
/*jshint newcap:false */
/*global React */
var app = app || {};

(function () {
	'use strict';
        
        app.TodoSocialLink = React.createClass({
        
        fbShare: function() {
            window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(location.href) + '&title=Lists.io&description=','facebook-share-dialog', 'width=626,height=436');return false;    
        },

        twShare: function() {
            window.open('http://twitter.com/home?status=' + encodeURIComponent(document.title + '\n' + '' + '\n' + location.href), 'twitter-share-dialog', 'width=626,height=436');return false;
        },

        gPlusShare: function() {
            window.open('https://plus.google.com/share?url=' + encodeURIComponent(location.href),'','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;
        },

        render: function() {
            return (
                <div>
                    
                    <ul className="list-inline pull-right">
                            <li>
                                <a href="javascript:window.print()" ><i className="fa fa-print"></i> </a>
                            </li>
                            <li>
                                <a href="#" onClick={this.fbShare}>
                                    <i className="fa fa-facebook"> </i> 
                                </a>&nbsp;
                                <a href="#" onClick={this.twShare}>
                                    <i className="fa fa-twitter"> </i> 
                                </a>&nbsp;
                                <a href="#" onClick={this.gPlusShare}>
                                    <i className="fa fa-google-plus"> </i> 
                                </a>&nbsp;
                            </li>
                        </ul>
                    </div>        
            );
          }
        });

})();
