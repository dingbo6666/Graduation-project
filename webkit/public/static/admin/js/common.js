/*页面 全屏-添加*/
function o2o_edit(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*添加或者编辑缩小的屏幕*/
function o2o_s_edit(title,url,w,h){
	layer_show(title,url,w,h);
}
/*-删除*/
function o2o_del(url){

	layer.confirm('确认要删除吗？',function(index){
		window.location.href=url;
	});
}
$('.listorder input').blur(function() {
	var id=$(this).attr('attr-id');
	var listorder = $(this).val();
	var postData = {
		'id':id,
		'listorder':listorder,
	};
	var url = SCOPE.listorder_url;
	$.post(url,postData,function(result){
		if(result.code == 1){
			location.href=result.data;
		}else{
			alert(result.msg);
		}
	},"json");

});
$(".cityId").change(function(){
	city_id = $(this).val();
	url = SCOPE.city_url;
	postData = {'id':city_id};
	$.post(url,postData,function(result){
			if(result.status == 1){
					data = result.data;
					city_html="";
					$(data).each(function(i){
						city_html += "<option value='"+this.id+"'>"+this.name+"</option>";
					});
					$('.se_city_id').html(city_html);
			}else if(result.status == 0){
					$('.se_city_id').html('');
			}
	},'json');
});
$(".categoryId").change(function(){
	category_id = $(this).val();
	url = SCOPE.category_url;
	postData = {'id':category_id};
	$.post(url,postData,function(result){
		if(result.status == 1){
					data = result.data;
					category_html="";
					$(data).each(function(i){
						category_html += '<input name="se_category_id[]" type="checkbox" id="checkbox-moban" value="'+this.id+'"/>'+this.name;
						category_html += '<label for="checkbox-moban">&nbsp;</label>';
					});
					$('.se_category_id').html(category_html);
			}else if(result.status == 0){
					$('.se_category_id').html('');
			}
	},'json');
});
