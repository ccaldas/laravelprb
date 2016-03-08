
$( document ).ready(function() {
    $( "#btn-busca" ).on('click',function() {
	  
	  var investigador= $("#sl-investigador").val();
	  var area= $("#sl-area").val();
	  var area= $("#sl-area").val();
	  if ((area!=null && area!="") && investigador!=null && investigador!="")
	  	{
	  		$.ajax({
	            type: "post",
	            url: URL+"/asigna",
	            data: { investigador: investigador, area: area},
	            cache: false,
	            success: function(data) {
	            	$("#panel-result").html(data);
			        console.log(data);
			        console.log("success");
			    },
			    error: function(data) {  
			        console.log(data);
			        console.log("error");                 
			    }
			        },"json");
		  /*$.ajax({
			  method: "POST",
			  url: URL+"/asigna",
			  data: { name: "John", location: "Boston" },
			  //dataType: "html",
			  context: document.body,
			  success:function(res)
			  {
			  	$("#panel-result").html(res);
			  },
			  complete:function(res)
			  {
			  	//$("#panel-result").html("fnaslfnds");
			  	$("#panel-result").html(res);
			  }
			})*/
		}else{
			alert("Por favor ingrese todos los datos");
		}
	});
	$.ajaxSetup(
	{
	    headers:
	    {
	        'X-CSRF-Token': $('input[name="_token"]').val()
	    }
	});
});

/*$("#btn-busca").click(function() {
  alert( "Goodbye!" ); // jQuery 1.3+
  return false;
});*/

