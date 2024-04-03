document.addEventListener('DOMContentLoaded', () => {
    if(window.location.href.indexOf('author/create') >-1 ) {
        let checkbox = document.querySelector('input[type="checkbox"]')
        let hiddenInput = document.querySelector('.form__group--hidden')
        if (checkbox && hiddenInput) {            
            document.addEventListener('change', () => {
                if (!checkbox.checked) {
                    openInput(hiddenInput)
                } else {
                    closeInput(hiddenInput)
                }
            })
        }
        function openInput(input) {
            if (!input.classList.contains('open-form-group')) {
                input.classList.add('open-form-group')
            }   
        }

        function closeInput(input) {
            if(input.classList.contains('open-form-group')) {
                input.classList.remove('open-form-group')
            }
        }
    }
})