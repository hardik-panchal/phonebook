<script type="text/javascript">
    $(document).ready(function(){

             
    });
    
    //Get Detail Of Phone-Book Record AT A Edit Time
    function doUpdatePhone(id){
        _a({
            data:{editContent:id},
            url:'<?php print _U ?>phonebook',
            handler:function(r){ 
                $("#submitPage").hide();
                $("#editPage").show();
                $(document).scrollTop(0);
                $("#name").val(r.data.name);
		$("#phone").val(r.data.phone);
		$("#notes").val(r.data.notes);
                $("#phone_id").val(r.data.id);
            }
        });
    }
    
    
    //Delete Phone-Book Record
    function doDeletePhone(id){
        $("#myModal").modal("show");
        genericFun = function(){
            _a({
                data:{deleteContent:id},
                url:'<?php print _U ?>phonebook',
                handler:function(r){
                    $("#myModal").modal("hide");
                    if(r.status){
                        _ns("Phone Number Deleted Successfully."); 
                        $("#phone_"+id).remove();
                    }else{
                        _nf("Error Occured");
                    }
                }
            });
        }
    }
    
</script>