$(document).ready(function(){

  appendSuggestedChannels(5);
  appendTrendingChannels(7);


  $(".tab").click(function(){
    if(!$(this).hasClass("selected_tab")){
      $(".tab").toggleClass("selected_tab");
    }

    if($(this).attr('id') == "suggested"){
      $("#trending_channels_list").fadeOut(250);
      setTimeout(function(){
        $("#suggested_channels_list").fadeIn(250);
      }, 250);
    }else{
      $("#suggested_channels_list").fadeOut(250);
      setTimeout(function(){
        $("#trending_channels_list").fadeIn(250);
      }, 250);
    }
  });


  $(".channel").click(function(){
    if(!$(this).hasClass("selected_channel")){
      $(".selected_channel").toggleClass("selected_channel");
      $(this).toggleClass("selected_channel");
    }
  });

});


function appendSuggestedChannels(num){
  for(var i = 0; i < num; i++){
    $("#suggested_channels_list").append('<div class="channel"><img class="channel_capt"/><div class="channel_title">Channel Title</div></div>');
  }
}

function appendTrendingChannels(num){
  for(var i = 0; i < num; i++){
    $("#trending_channels_list").append('<div class="channel"><img class="channel_capt"/><div class="channel_title">Channel Title</div></div>');
  }
}
