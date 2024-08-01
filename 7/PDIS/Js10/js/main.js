class HangmanGame {
            constructor() {
                this.word = '';
                this.guessedLetters = [];
                this.remainingAttempts = 6;
                this.hangmanStages = [
                    '  +---+\n  |   |\n      |\n      |\n      |\n      |\n=========',
                    '  +---+\n  |   |\n  O   |\n      |\n      |\n      |\n=========',
                    '  +---+\n  |   |\n  O   |\n  |   |\n      |\n      |\n=========',
                    '  +---+\n  |   |\n  O   |\n /|   |\n      |\n      |\n=========',
                    '  +---+\n  |   |\n  O   |\n /|\\  |\n      |\n      |\n=========',
                    '  +---+\n  |   |\n  O   |\n /|\\  |\n /    |\n      |\n=========',
                    '  +---+\n  |   |\n  O   |\n /|\\  |\n / \\  |\n      |\n========='
                ];
                this.spanishWords = [
                    'Argentina', 'Brasil', 'Francia', 'Alemania', 'Inglaterra', 'Uruguay', 'Paraguay', 'Bolivia',
                    'España', 'Italia', 'Holanda', 'Estados Unidos', 'Polonia', 'Mexico', 'Arabia Saudita', 'Senegal',
                    'Ecuador', 'Catar', 'Iran', 'Gales', 'Australia', 'Tunez', 'Dinamarca', 'Suecia', 'Noruega', 'Finlandia',
                    'Japon', 'Costa Rica', 'Marruecos', 'Croacia', 'Belgica', 'Canada', 'Suiza', 'Portugal', 'Camerun',
                    'Corea del Sur', 'Sudafrica', 'Ghana', 'Chile', 'Peru', 'Venezuela', 'Colombia', 'Rumania', 'Polonia',  
                ];
            }

            getRandomWord() {
                const randomIndex = Math.floor(Math.random() * this.spanishWords.length);
                return this.spanishWords[randomIndex];
            }

            startNewGame() {
                this.word = this.getRandomWord();
                this.guessedLetters = [];
                this.remainingAttempts = 6;
                this.updateDisplay();
            }

            makeGuess(letter) {
                letter = this.normalizeString(letter.toLowerCase());
                if (this.guessedLetters.includes(letter)) {
                    return 'Ya has intentado esta letra.';
                }
                this.guessedLetters.push(letter);
                if (!this.normalizeString(this.word).includes(letter)) {
                    this.remainingAttempts--;
                }
                this.updateDisplay();
                if (this.hasWon()) {
                    return '¡Felicidades! Has ganado.';
                } else if (this.hasLost()) {
                    return `Game over. La palabra era "${this.word}".`;
                }
                return '';
            }

            updateDisplay() {
                const wordDisplay = document.getElementById('word-display');
                const hangmanDisplay = document.getElementById('hangman');
                
                wordDisplay.textContent = this.word
                    .split('')
                    .map(letter => this.guessedLetters.includes(this.normalizeString(letter.toLowerCase())) ? letter : '_')
                    .join(' ');

                hangmanDisplay.textContent = this.hangmanStages[6 - this.remainingAttempts];
            }

            hasWon() {
                return this.normalizeString(this.word.toLocaleUpperCase()).split('').every(letter => this.guessedLetters.includes(letter.toLowerCase()));
            }

            hasLost() {
                return this.remainingAttempts === 0;
            }

            normalizeString(str) {
                return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
            }
        }

        const game = new HangmanGame();

        function handleGuess() {
            const letterInput = document.getElementById('letter-input');
            const message = document.getElementById('message');
            const letter = letterInput.value;
            if (letter) {
                message.textContent = game.makeGuess(letter);
                letterInput.value = '';
            }
        };
        document.getElementById('guess-btn').addEventListener('click', () => {
            handleGuess();
        }
        );
        document.getElementById('letter-input').addEventListener('keyup', (event) => {
            if (event.key === 'Enter') {
                handleGuess();
            }
        });

        document.getElementById('new-game-btn').addEventListener('click', () => {
            game.startNewGame();
            document.getElementById('message').textContent = '';
        });

        game.startNewGame();