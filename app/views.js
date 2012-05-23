
var ROFLView = Backbone.View.extend({
  main_listing: _.template($("#mainListingTemplate").html()),
  default_listing: _.template($("#defaultListingTemplate").html()),
  menu_item: _.template($("#menuItemTemplate").html()),
  menu_header: _.template("<li class='nav-header'><%=title%></li>\n"),

  initialize: function(data){
    _.bindAll(this, 'selectItem');
    that = this;
    // load the session data
    this.schedule = data;
    this.createSideBar();
  },

  showDefault: function() {
    $("#mainListing").html(this.default_listing());
  },

  populateMainListing: function(index) {
    var listing = this.schedule[index];
    $("#mainListing").html(this.main_listing({
        title: listing.title,
        subtitle: listing.subtitle,
        stickiesUrl: listing.stickiesUrl,
        stickiesClass: listing.stickiesClass,
        etherpadUrl: listing.etherpadUrl
    }));
  },

  followURL: function(e){
    alert("hat");
  },

  selectItem: function(e){
    that = this;
    $.each($('#roflbar li'), function(index, value){
      value.removeClass('active')
    });
    $(e.target).addClass('active');
  },

  createSideBar: function(){
    that = this;
    var htmlBuffer = "";

    $.each(that.schedule, function(index, value){ 
      htmlBuffer +=that.menu_item({
          index: index,
          title: value.title
      });
    });
    $('#roflbar').html(htmlBuffer);
  },

  selectSession: function(e){
    this.cleanEvent(e);   
  },

  cleanEvent: function(e){
    e.stopPropagation()
    e.preventDefault()
  }

});

jQuery.getJSON("data/schedule.json", function(data){
    var roflView = new ROFLView(data);
    var ROFLRouter = Backbone.Router.extend({
        routes: {
            ":index": 'showPanel',
            "": 'showDefault'
        },
        showPanel: function(index) {
            roflView.populateMainListing(parseInt(index));
        },
        showDefault: function() {
            roflView.showDefault();
        }

    });
    var router = new ROFLRouter();
    Backbone.history.start({pushState: false, root: "/"})
});

