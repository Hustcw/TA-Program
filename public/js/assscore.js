$(document).ready(function(){
	//表格设置
	$("#StuScore").bootstrapTable({
		classes:"table table-striped",
		cache: false,
		sortable: false,                     //是否启用排序
        sortOrder: "asc",
		sortName:"学生姓名",
		search:"true",
		pagination:"true",
		pageNumber:"1",
		pageSize:"20",
		columns: [{
                checkbox: true
            }, {
                field: 'Number',
                title: '学生学号'
            }, {
                field: 'Name',
                title: '姓名'
            }, {
                field: 'Score',
                title: '成绩',
				editable:true
            }, ],
		
        onEditableSave: function (field, row) {
                $.ajax({
                    type: "post",
                    url: "",
                    data: { strJson: JSON.stringify(row) },
                    success: function (data, status) {
                        if (status === "success") {
                            alert("编辑成功");
                        }
                    },
                    error: function () {
                        alert("Error");
                    },
                    complete: function () {

                    }
				});
			},
		showExport: true,                     
        exportDataType: "selected", 
	});	
});