let todoItem = document.getElementById('textbox');
let todolist = document.getElementById('todolist');

class Item {
    constructor(name) {
        this.name = name;
    }
}

let todoItems = [];

function AddItem() {
    let content = todoItem.value;
    let newItem = new Item(content);
    todoItems.push(newItem);

    const newLi = document.createElement("li");
    const newContent = document.createTextNode(content);
    newLi.appendChild(newContent);
    todolist.append(newLi);
}

todolist.addEventListener('click', function(ev) {
    if (ev.target.tagName === 'LI') {
        ev.target.classList.toggle('checked');
    }
}, false);

