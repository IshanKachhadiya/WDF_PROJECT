document.addEventListener('DOMContentLoaded', function() {
    const heading = document.createElement('h1');
    heading.textContent = 'Welcome to My Simple Page!';
    document.body.appendChild(heading);

    const button = document.createElement('button');
    button.textContent = 'Click Me';
    button.onclick = function() {
        alert('Button was clicked!');
    };
    document.body.appendChild(button);

    // Add a paragraph
    const paragraph = document.createElement('p');
    paragraph.textContent = 'This is a simple paragraph added to the page.';
    document.body.appendChild(paragraph);

    // Add an input box and display its value on submit
    const input = document.createElement('input');
    input.type = 'text';
    input.placeholder = 'Type something...';
    document.body.appendChild(input);

    const submitBtn = document.createElement('button');
    submitBtn.textContent = 'Submit';
    submitBtn.onclick = function() {
        alert('You entered: ' + input.value);
    };
    document.body.appendChild(submitBtn);
});