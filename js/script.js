

jQuery( document ).ready(function( $ ) {
                         $("#bestClassesButton").click(function(){showBestClasses($(this));})
                         $("#bestTeachersButton").click(function(){showBestTeachers($(this));})
                         $("#easiestClassesButton").click(function(){showEasiestClasses($(this));})
                         $("#searchButton").click(function(){createSearchQuery($(this));})
                         $("#searchButtonHeader").click(function(){createSearchQueryHeader($(this));})
                         $(".ddOption").click(function(){dropDownClicked($(this));})
                         $(".img-homepage").hover(function(){hoverOverThumbnail($(this));},function(){hoverOffThumbnail($(this));})
                         $('.star').click(function(){starClicked($(this));});
                         $('#sendReview').click(function(){sendClicked($(this));});
                         
                         //catch enter button
                         
                         $('#searchInputField').keydown( function(e) {
                                                        var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
                                                        if(key == 13) {
                                                        createSearchQuery();
                                                        }
                                                        });
                         
                         $('#searchInputFieldHeader').keydown( function(e) {
                                                              var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
                                                              if(key == 13) {
                                                              createSearchQueryHeader();
                                                              }
                                                              });
                         
                         });


function showBestClasses(thisObj){
    console.log("showBC");
    $('#bestClassesTable').show();
    $('#bestProfessorsTable').hide();
    $('#easiestClassesTable').hide();
    $('#bestTeachersButton').addClass('btn-primary').removeClass('btn-default-selected');
    $('#easiestClassesButton').addClass('btn-primary').removeClass('btn-default-selected');
    thisObj.addClass('btn-default-selected').removeClass('btn-primary');
    
}
function showBestTeachers(thisObj){
    console.log("showBT");
    $('#bestClassesTable').hide();
    $('#bestProfessorsTable').show();
    $('#easiestClassesTable').hide();
    $('#bestClassesButton').addClass('btn-primary').removeClass('btn-default-selected');
    $('#easiestClassesButton').addClass('btn-primary').removeClass('btn-default-selected');
    thisObj.addClass('btn-default-selected').removeClass('btn-primary');
}
function showEasiestClasses(thisObj){
    console.log("showBC");
    $('#bestClassesTable').hide();
    $('#bestProfessorsTable').hide();
    $('#easiestClassesTable').show();
    $('#bestClassesButton').addClass('btn-primary').removeClass('btn-default-selected');
    $('#bestTeachersButton').addClass('btn-primary').removeClass('btn-default-selected');
    thisObj.addClass('btn-default-selected').removeClass('btn-primary');
    thisObj.addClass('btn-default-selected').removeClass('btn-primary');
}

function createSearchQuery(thisObj){
    
    var url;
    query = $('#searchInputField').val();
    type = $('#dropDownButton').text();
    type = type.replace(/\s/g, "")
    url = "searchResults.php?type="+type+"&query="+query;
    console.log(url);
    document.location.href=(url)
}

function createSearchQueryHeader(thisObj){
    
    var url;
    query = $('#searchInputFieldHeader').val();
    type = $('#dropDownButtonHeader').text();
    type = type.replace(/\s/g, "")
    url = "searchResults.php?type="+type+"&query="+query;
    console.log(url);
    document.location.href=(url)
}



function dropDownClicked(thisObj){
    
    temp = $('#dropDownButton').html();
    temp = temp.replace('<span class="caret"></span>',"");
    $('#dropDownButton').html(thisObj[0].innerHTML+'<span class="caret"></span>');
    console.log(temp);
    console.log(temp);
    $(thisObj[0]).html(temp);
    
}
function hoverOverThumbnail(thisObj){
    console.log("hovering on");
    thisObj.css("background-color", "#3090C7");
    
}
function hoverOffThumbnail(thisObj){
    console.log("hovering off");
    thisObj.css("background-color", "#fff");
    
}

helpfulness =0;
clarity =0;
easiness =0;
knowledge =0;
function starClicked(thisObj){
    console.log("star clicked");
    
    //alert(thisObj.attr('href'))
    //alert("Index: " + thisObj.index());
    thisObj.html("<a href='#'><span></span></a><b></b>");
    value = thisObj.attr('href');
    value = value.replace("#","");
    parentCategory = thisObj.parent().parent().parent().attr('id');
    switch(parentCategory)
    {
    case "star-rate-helpfulness":
      helpfulness=value;
      break;
    case "star-rate-clarity":
      clarity=value;
      break;
    case "star-rate-easiness":
    	easiness=value;
    	break;
    case "star-rate-knowledge":
    	knowledge=value;
    	break;
    default:
      console.log('nothing worked');
    }
    console.log(parentCategory+value);
    console.log(helpfulness+clarity+easiness+knowledge);
}

words =0;
workload =0;
function sendClicked(thisObj){
	console.log('send clicked');
	words = $('#wordsReview').val();
	workload = $('#workLoadReview').val();
	courseName = $('#course').html();
	courseNumber = $('#courseNumber').html();
	instructor = $('#instructor').html();
	commaidx = instructor.indexOf(',');
	last = instructor.substring(0,commaidx);
	first = instructor.substring(commaidx+1);
    data = ("{helpfulness:"+helpfulness+",clarity:"+clarity+",easiness:"+easiness+",knowledge:"+knowledge+",words:"+words+",workLoad:"+workload+",courseName:"+courseName+",callNumber:"+courseNumber+",instructor:"+instructor+"firstName:"+first+",lastName:"+last+",words:"+words+"}");
    console.log(data);
    $.ajax({
    	  type: "POST",
    	  url: ajax.php,
    	  data: data,    	  
    	});
   
    
}

