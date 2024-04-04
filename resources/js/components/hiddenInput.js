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
            if (!input.classList.contains('form__group--open')) {
                input.classList.add('form__group--open')
            }   
        }

        function closeInput(input) {
            if(input.classList.contains('form__group--open')) {
                input.classList.remove('form__group--open')
            }
        }
    }
})