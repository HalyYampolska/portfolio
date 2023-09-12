document.addEventListener('DOMContentLoaded', function () {
    const heading = document.getElementById('typing-heading');
        const text = "I'm glad to see you here";
        let index = 0;

        function type() {
            if (index < text.length) {
                heading.innerHTML += text.charAt(index);
                index++;
                setTimeout(type, 100); 
            }
        }

        type(); 
});
