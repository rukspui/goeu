function resetVideoHeight() {
    $(".video").css("height", $("#results").width() * 9/16);
}


function getTedYoutubeVideos() {
    console.log('getting clips...');
    var searchQuery = $('.searchQuery').val(); 
    console.log(searchQuery);
    var request = gapi.client.youtube.search.list({
            part: "snippet",
            type: "video",
//            q: encodeURIComponent($("#search").val()).replace(/%20/g, "+"),
            q: encodeURIComponent(searchQuery),
            maxResults: 50,
            channelId: 'UCAuUUnT6oDeKwE6v1NGQxug',
            order: "viewCount"
       }); 
    request.execute(function(response) {
          var results = response.result;
          var thumbnailWidth = 269;
          $('.tedVideoResults .resultsWrapper').empty('');
          results.items.forEach(function(result) {
             var thumbnail = '<img src="http://img.youtube.com/vi/' + result.id.videoId + '/0.jpg" onclick="openVideo(\'' + result.id.videoId + '\')" />';
             var titleTemplate = '<span class="title">' + result.snippet.title + '</span>';
             var videoTemplate = '<div class="youtubeResult">' + thumbnail + titleTemplate + '</div>' 
             $('.tedVideoResults .resultsWrapper').append(videoTemplate);
          });
          
          $('.tedVideoResults .resultsWrapper').width(thumbnailWidth * (results.items.length) - 37);
           
       });
}

function openVideo(id) {
    console.log(id);
    var playerTemplate = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' + id + '" frameborder="0" allowfullscreen></iframe>';
    $('.youtubeVideoModal').empty();
    $('.youtubeVideoModal').append(playerTemplate);
    $('.youtubeVideoModal').show();
    
}

function init() {
    console.log('works')
    gapi.client.setApiKey("AIzaSyAt8-mFm8xbhHO1oAsZwH0qAljV9gi8UU4");
    gapi.client.load("youtube", "v3", function() {
        getTedYoutubeVideos();
    });
}


