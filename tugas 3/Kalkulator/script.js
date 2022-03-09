const calculator = document.querySelector('.calculator');
const keys = calculator.querySelector('.calculator__keys');

keys.addEventListener('click', e => {
    if (e.target.matches('button')) {

        const key = e.target
        const action = key.dataset.action
        const keyContent = key.textContent
        const display = document.querySelector('.calculator__display')
        const displayedNum = display.textContent
        const previousKeyType = calculator.dataset.previousKeyType
        const calculate = (n1, operator, n2) => {
            let result = ''

            if (!action) {
                console.log('number key!')
            }

            if (operator === 'add') {
                result = parseFloat(n1) + parseFloat(n2)
            } else if (operator === 'subtract') {
                result = parseFloat(n1) - parseFloat(n2)
            } else if (operator === 'multiply') {
                result = parseFloat(n1) * parseFloat(n2)
            } else if (operator === 'divide') {
                result = parseFloat(n1) / parseFloat(n2)
            }

            return result
        }

        if (
            action === 'add' ||
            action === 'subtract' ||
            action === 'multiply' ||
            action === 'divide'
        ) {
            key.classList.add('is-depressed')
            // menambahkan atribut costum
            calculator.dataset.previousKeyType = 'operator'
            // Menghapus .is-depressed class dari seluruh keys
            Array.from(key.parentNode.children)
                .forEach(k => k.classList.remove('is-depressed'))

            calculator.dataset.firstValue = displayedNum
            calculator.dataset.operator = action
        }

        if (action === 'decimal') {
            display.textContent = displayedNum + '.'
        }

        if (action === 'clear') {
            display.textContent = 0
            key.textContent = 'AC'
            calculator.dataset.previousKeyType = 'clear'
        }

        if (action !== 'clear') {
            const clearButton = calculator.querySelector('[data-action=clear]')
            clearButton.textContent = 'CE'
        }

        if (action === 'calculate') {
            const firstValue = calculator.dataset.firstValue
            const operator = calculator.dataset.operator
            const secondValue = displayedNum

            display.textContent = calculate(firstValue, operator, secondValue)
        }

        if (!action) {
            if (displayedNum === '0' || previousKeyType === 'operator') {
                display.textContent = keyContent
            } else {
                display.textContent = displayedNum + keyContent
            }
        }
    }

})