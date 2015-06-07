var taskInput = document.getElementById("new-task");
var addButton = ducument.getElementsByTagName("button")[0];
var incompleteTasksHolder = document.getElementById("incomplete-tasks");
var completeTasksHolder = document.getElementById("complete-tasks");

//Add a new task
 var addTask = function(){
     console.log("Add task...");
 }
//Edit an existing task
var editTask = function(){
    console.log("Edit Task...");
}
//Delete an existing task
var deleteTask = function(){
    console.log("Delete Task...");
}
//Mark a task as complete
var taskComplete = function(){
    console.log("Complete Task...");
}
//Mark a task as incomplete
var taskIncomplete = function(){
    console.log("Task Incomple...");
}

var bindTaskEvents(taskListItem, checkBoxHandler){
    var checkBox = taskListItem.querySelector("input[type=checkBox]");
    var editButton = taskListItem.querySelector("button.edit");
    var deleteButton = taskListItem.querySelector("button.delete");
    
    editButton.onclick = editTask;
    deleteButton.onclick = deleteTask;

    checkBox.onchange = checkBoxEventHandler;
}


addButton.onclick = addTask;

for(var i = 0; i < incompleteTasksHolder.children.length; i++){
    bindTaskEvents(incompleteTasksHolder.children[i], taskComplete);
}

for(var i = 0; i < incompleteTasksHolder.children.length; i++){
    bindTaskEvents(completeTasksHolder.children[i], taskIncomplete);
}