    class HangmanGame {
        constructor() {
            this.word = '';
            this.guessedLetters = [];
            this.remainingAttempts = 6;
            this.score = 0;
            this.timeLeft = 30;
            //Dibujo del ahorcado
            this.hangmanStages = [
                '  +---+\n  |   |\n      |\n      |\n      |\n      |\n=========',
                '  +---+\n  |   |\n  O   |\n      |\n      |\n      |\n=========',
                '  +---+\n  |   |\n  O   |\n  |   |\n      |\n      |\n=========',
                '  +---+\n  |   |\n  O   |\n /|   |\n      |\n      |\n=========',
                '  +---+\n  |   |\n  O   |\n /|\\  |\n      |\n      |\n=========',
                '  +---+\n  |   |\n  O   |\n /|\\  |\n /    |\n      |\n=========',
                '  +---+\n  |   |\n  O   |\n /|\\  |\n / \\  |\n      |\n========='
            ];
            //Todas los paises que aparecen para adivinar
            this.spanishWords = [
                'Argentina', 'Brasil', 'Francia', 'Alemania', 'Inglaterra', 'Uruguay', 'Paraguay', 'Bolivia',
                'España', 'Italia', 'Holanda', 'Estados Unidos', 'Polonia', 'Mexico', 'Arabia Saudita', 'Senegal',
                'Ecuador', 'Catar', 'Iran', 'Gales', 'Australia', 'Tunez', 'Dinamarca', 'Suecia', 'Noruega', 'Finlandia',
                'Japon', 'Costa Rica', 'Marruecos', 'Croacia', 'Belgica', 'Canada', 'Suiza', 'Portugal', 'Camerun',
                'Corea del Sur', 'Sudafrica', 'Ghana', 'Chile', 'Peru', 'Venezuela', 'Colombia', 'Rumania', 'Polonia',
            ];
        }

        async saveScore() {
            try {
                const { data, error } = await supabase
                    .from('Score')
                    .insert([
                        { Jugador: this.playerName, Puntaje: this.score, Fecha: new Date().toISOString() }
                    ]);
    
                if (error) throw error;
                console.log('Score saved successfully', data);
            } catch (error) {
                console.error('Error saving score:', error);
            }
        }
    
        //Obtiene una palabra aleatoria de la lista de palabras
        getRandomWord() {
            const randomIndex = Math.floor(Math.random() * this.spanishWords.length);
            return this.spanishWords[randomIndex];
        }

        //Inicia el juego
        startNewGame() {
            this.word = this.getRandomWord();
            this.guessedLetters = [];
            this.remainingAttempts = 6;
            this.updateDisplay();
        }

        //Adivina la letra
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
                this.score++;
                this.startNewGame();
                return '¡Felicidades! Has ganado. Nueva palabra!';
            } else if (this.hasLost()) {
                this.redirectToIndex();
                return `¡Has perdido! La palabra era: ${this.word}.`;
            }
            return '';
        }

        //Actualiza la pantalla
        updateDisplay() {
            const wordDisplay = document.getElementById('word-display');
            const hangmanDisplay = document.getElementById('hangman');
            const scoreDisplay = document.getElementById('score-display');
            const lettersDisplay = document.getElementById('letters-container');

            if(wordDisplay?.textContent) {
                wordDisplay.textContent = this.word
                    .split('')
                    .map(letter => this.guessedLetters.includes(this.normalizeString(letter.toLowerCase())) ? letter : '_')
                    .join(' ');

                hangmanDisplay.textContent = this.hangmanStages[6 - this.remainingAttempts];
                scoreDisplay.textContent = `Puntaje: ${this.score}`;
                lettersDisplay.textContent = `Letras utilizadas: ${this.guessedLetters.join(', ')}`;
            }

        }

        //Dice si ganaste o perdiste el juego.
        hasWon() {
            return this.normalizeString(this.word.toLocaleUpperCase()).split('').every(letter => this.guessedLetters.includes(letter.toLowerCase()));
        }

        hasLost() {
            return this.remainingAttempts === 0;
        }


        normalizeString(str) {
            return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        }

        //Redirige a la página principal
        redirectToIndex() {
            setTimeout(() => {
                window.location.href = 'index.html';
            },);
        }
    }

    const game = new HangmanGame();

    //Maneja la adivinanza de la letra
    function handleGuess() {
        const letterInput = document.getElementById('letter-input');
        const message = document.getElementById('message');
        const letter = letterInput.value;
        if (letter) {
            message.textContent = game.makeGuess(letter);
            letterInput.value = '';
        }
    }

    try {
        //Hace que funcione el botón de adivinar y la tecla Enter
        document?.getElementById('guess-btn')?.addEventListener('click', () => {
            handleGuess();
        });
    } catch (error) {
        console.log('Error:', error);
    }

    try {
        document.getElementById('letter-input').addEventListener('keyup', (event) => {
            if (event.key === 'Enter') {
                handleGuess();
            }
        });
    } catch (error) {
        console.error('Error:', error);
    }

    document?.getElementById('letter-index')?.addEventListener('keyup', (event) => {
        if(event.key === 'Enter') {
        }
    });


    //iniciador del temporizador de 30 seg.
    setInterval(() => {
        game.timeLeft--;
        if (game.timeLeft === 0) {
            game.redirectToIndex();
        }
        try {
            document.getElementById('timeLeft').textContent = `Tiempo restante: ${game.timeLeft} segundos`;
        } catch (error) {
            console.log(error)
        }
    }, 1000);


    game.startNewGame();

    const supabaseUrl = 'https://sdozjwqdnkstjpgcznvs.supabase.co';
    const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InNkb3pqd3FkbmtzdGpwZ2N6bnZzIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MjMxNTEwNDcsImV4cCI6MjAzODcyNzA0N30.aD2p8uGNUphsrwKjtF1kcHaxI3R3z6I74MwpE4ijYW8';

    // Para crear un cliente de Supabase
    const supabaseClient = window.supabase.createClient(supabaseUrl, supabaseKey);

    async function populatePlayerTable() {
        try {
            const { data, error } = await supabase
                .from('Score')
                .select('id, Jugador, Puntaje, Fecha')
                .order('Puntaje', { ascending: false });
    
            if (error) throw error;
    
            const tableBody = document.querySelector('#Score tbody');
            if (!tableBody) {
                console.error('Table body not found');
                return;
            }
    
            tableBody.innerHTML = '';
    
            data.forEach(record => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${record.id}</td>
                    <td>${record.Jugador}</td>
                    <td>${record.Puntaje}</td>
                    <td>${new Date(record.Fecha).toLocaleDateString()}</td>
                `;
                tableBody.appendChild(row);
            });
        } catch (error) {
            console.log('Error fetching data:', error);
        }
    }
    
    // Llamar a populatePlayerTable cuando se carga la página
    document.addEventListener('DOMContentLoaded', populatePlayerTable);