#2. Conexión y manipulación de datos con SQLite
import sqlite3

conn = sqlite3.connect('EESTN5.db')
cursor = conn.cursor()

try:
    cursor.execute('''
    CREATE TABLE IF NOT EXISTS alumnos (
        id INTEGER PRIMARY KEY,
        nombre TEXT,
        edad INTEGER
    )
    ''')

    alumnos = [
        ('Luca', 19),
        ('Matias', 17),
        ('Alan', 18),
        ('Facundo', 19),
        ('Camila', 17),
        ('Nataly', 20),
        ('Rosa', 16),
        ('Tomas', 19)
    ]

    cursor.executemany('INSERT INTO alumnos (nombre, edad) VALUES (?, ?)', alumnos)

    conn.commit()

    print("Registros insertados con éxito.")

    cursor.execute('SELECT * FROM alumnos WHERE edad > 17')
    
    resultados = cursor.fetchall()
    
    print("\nAlumnos mayores de 17 años:")
    for alumno in resultados:
        print(f"ID: {alumno[0]}, Nombre: {alumno[1]}, Edad: {alumno[2]}")

except sqlite3.Error as e:
    print(f"Error en SQLite: {e}")

finally:
    conn.close()

print("\nConexión a la base de datos cerrada.")