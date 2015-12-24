function get_info_ajax()
{
    $.ajax({
        url:'/index.php/main/get_rectange_info_ajax',
        type:'post',
        data:{},
        success:function(data){
            //alert(data);
            var r_data = JSON.parse(data);
            $("#total_num").html(r_data['total_num']);
            $("#total_profit").html(r_data['total_profit']);
            $("#need_list_num").html(r_data['need_list_num']);
            $("#care_ratio").html(r_data['care_ratio']);
            //alert(r_data);
        }
    });
}

jQuery(document).ready(function(){
    get_info_ajax();
});