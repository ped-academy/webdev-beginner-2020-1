$(document).ready(function () {
    const myForm = $('#todo-list');

    myForm.on("submit", addToList);

    $('#todo-menu').on('click', 'li', function () {
        toggleTask($(this));
    });

    $('#do-all').on('click', function () {
        $('#todo-menu li').each(function (index, element) {
            completeTask($(element));
        });
    });

    $('#undo-all').on('click', function () {
        $('#todo-menu li').each(function (index, element) {
            undoTask($(element));
        });
    });
});

function toggleTask(task) {
    task.toggleClass('done list-group-item-success')
}

function completeTask(task) {
    task.addClass('done list-group-item-success')
}

function undoTask(task) {
    task.removeClass('done list-group-item-success')
}

function addToList(event) {
    event.preventDefault();

    const newElement = $('#todo-element').val();

    if (newElement === '') {
        alert('Non hai inserito niente');
        return;
    }

    // const newNode = $(`<li class="list-group-item">${newElement}</li>`);

    const newNode = $('<li></li>');
    newNode.addClass('list-group-item');
    newNode.text(newElement);

    $('#todo-menu').append(newNode);

    $('#todo-element').val('');
}