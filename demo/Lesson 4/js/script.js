var btnAdd = document.getElementById("add-task");
var taskList = document.getElementById("task-list");
var task = document.getElementById("task");
var counter = 1;

btnAdd.addEventListener("click", addTask);

function addTask() {
    if(task.value != "") {
        var list = document.createElement("li");
        list.setAttribute("id", "list-task-item-" + counter);
        
        var paragraph  = document.createElement("p");
        paragraph.setAttribute("id", "task-description-" + counter)

        var input = document.createElement("input");
        input.type = "checkbox";
        input.setAttribute("data-id", counter);
        input.classList = "status";

        paragraph.appendChild(input);

        var text = document.createTextNode(task.value);
        paragraph.appendChild(text);

        var btnDelete = document.createElement("button");
        btnDelete.classList = "btn btn-xs btn-delete";
        btnDelete.setAttribute("data-id", counter);
        btnDelete.textContent = "Delete";
        
        paragraph.appendChild(btnDelete);

        list.appendChild(paragraph)
        taskList.appendChild(list);
        
        markAsDone();

        deleteTask();

        task.value = "";

        counter++;
    } else {
        alert("Task is required.");
    }
}

function markAsDone() {
    var input = document.querySelectorAll(".status");
    for (var i=0; i< input.length; i++) {
        input[i].addEventListener("click", function(){
            var id = this.getAttribute("data-id");
            var taskDescription = document.getElementById("task-description-" + id);
            if(this.checked) {
                taskDescription.classList.add("done");
            } else {
                taskDescription.classList.remove("done");
            }
        })
    }
}

function deleteTask() {
    var btnDelete = document.querySelectorAll(".btn-delete");
    for (var i=0; i< btnDelete.length; i++) {
        btnDelete[i].addEventListener("click", function(){
            var id = this.getAttribute("data-id");
            console.log(id);
            var parentDiv = document.getElementById("task-list");
            var removeList = document.getElementById("list-task-item-" + id);
            parentDiv.removeChild(removeList);    
        })
    }
}