jQuery(document).ready(function(){
    $('#search_info').change(function(){
    	var info=$('#search_info').val();
    	if (!info){
    		return;
    	}
    	$.ajax({
    		url:"/index.php/match_task/get_task_info_ajax_by_condition",
    		type:"POST",
    		data:{
    			'id':info
    		},
    		success:function(data,status,errorInfo){
    			//alert(status);
    			//alert(data);
    			var tt=JSON.parse(data);
    			//alert(tt[0].taskid);
    			$("#disp_tbody").children("tr").remove();
    			var t_html='';
    			for (var i=0;i<tt.length;i++){
    				t_html +='<tr class="odd gradeX">';
    				t_html +='<td><input type="checkbox" class="checkboxes" value='+(tt[i].id).toString()+'/></td>';
    				t_html +='<td>'+(tt[i].id).toString()+'</td>';
    				t_html +='<td><a href="javascript:void(0);">'+(tt[i].taskid).toString()+'</a></td>';
    				t_html +='<td>'+(tt[i].method).toString()+'</td>';
    				t_html +='<td>'+(tt[i].status).toString()+'</td>';
    				t_html +='<td>dd</td>';
    				t_html +='<td>'+(tt[i].operator).toString()+'</td>';
    				t_html +='<td>'+(tt[i].create_time)+'</td>';
    				t_html +='<td>'+(tt[i].finish_time)+'</td>';
    				t_html +='<td>'+(tt[i].log).toString()+'</td>';
    				t_html +='</tr>';
    				$("#disp_tbody").append(t_html);
    	    		
    			}
    			},
    		error:function(data,status,errorInfo){
    			$("#display").html(errorInfo);
    		}
    	});
    });
});