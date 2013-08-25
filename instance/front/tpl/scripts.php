<script type="text/javascript">
    $(document).ready(function(){
    
    });


    function initFormValidation(){
        
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); 
    }
    
    var genericFun = function(){
        $("#myModal").modal("hide");
    }
    function _ns(message){
        noty({"text":message,"layout":"bottom","type":"success","closeButton":"true"});
    }
    function _nf(message){
        noty({"text":message,"layout":"bottom","type":"error","closeButton":"true"});
    }
    function _w(){
        noty({"text":"We are working on it....","layout":"bottomRight","type":"alert","timout":"false"});
    }
    function _wm(){
        noty({"text":"We are working on it....","layout":"bottomRight","type":"alert","timout":"false","modal":"true"});
    }
    function _wc(){
        $("#myModal").modal("hide");
        $.noty.closeAll();
    }
    function l(url){
        location.href=url;
    }
    function lp(url){
        window.open(url);
    }
    var _a = function(param){
        _wm();
        $.ajax({
            type:"POST",
            url:param.url,
            data:param.data,
            dataType:'json',
            success:function(remoteContent){
                _wc();
                try{
                    param.handler(remoteContent);
                }catch(e){this.error()}
            },
            error:function(r){
                _wc();
                _nf('Technical Error!');
            }
        });
    }
</script>