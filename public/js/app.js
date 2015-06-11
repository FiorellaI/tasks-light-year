var tasks = [];

$(function() {

	$('.datepicker').datepicker({language: 'es', format: 'dd/mm/yyyy'});
	$("form").submit(addTask);

    $.get('/tasks', null, function(tasks){

        $(tasks).each(function (i,t){

            var item = $(".list-group-item:first").clone();
            item.find("[data-field=task-name]").html(t.name);
            item.find("[data-field=task-date]").html(moment(t.due_date).fromNow());
            item.find("button").click(checkTask);
            item.appendTo(".list-group").show();
        })
    }, 'json')

});

var addTask = function() {

	var newTask = {};
	newTask.done = false;
	newTask.name = $("#taskName").val();
	newTask.due_date = moment($("#taskDate").datepicker('getDate')).format("YYYY-MM-DD");
	tasks.push(newTask);


    $.post('/tasks', newTask, function(newTask){
        var item = $(".list-group-item:first").clone();
        item.find("[data-field=task-name]").html(newTask.name);
        item.find("[data-field=task-date]").html(moment(newTask.due_date).fromNow());
        item.find("button").click(checkTask);
        item.appendTo(".list-group").show();

        $(":input").val("");
        $("input:first").focus();
    },'json');


	return false;
};

var checkTask = function() {
	$(this).removeClass("btn-default").addClass("btn-success").next("span").addClass("done");
};