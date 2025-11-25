// Editor functionality
const toolbarBtns = document.querySelectorAll('.toolbar-btn');
const editorContent = document.getElementById('blogContent');

toolbarBtns.forEach(btn => {
    btn.addEventListener('click', function() {
        const command = this.dataset.command;
        
        if (command === 'createLink') {
            const url = prompt('Enter URL:');
            if (url) {
                document.execCommand(command, false, url);
            }
        } else {
            document.execCommand(command, false, null);
        }
        
        editorContent.focus();
    });
});

// Update form submission to get editor content
blogForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get editor content instead of textarea
    const content = editorContent.innerHTML;
    

});

const form = document.getElementById('blogForm');
const editor = document.getElementById('blogContent'); // your contenteditable div
const hiddenBody = document.getElementById('blogBodyInput'); // hidden textarea

form.addEventListener('submit', function(e) {
    hiddenBody.value = editor.innerHTML;
});
