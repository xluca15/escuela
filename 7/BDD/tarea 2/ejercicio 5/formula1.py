def agregar_corredor(corredores):
    nombre = input("Ingrese el nombre del corredor: ")
    apellido = input("Ingrese el apellido del corredor: ")
    edad = int(input("Ingrese la edad del corredor: "))
    nacionalidad = input("Ingrese la nacionalidad del corredor: ")
    equipo = input("Ingrese el equipo para el que corre: ")
    numero = int(input("Ingrese el número que utiliza: "))
    año_inicio = int(input("Ingrese el año desde cuando corre en el equipo: "))
    
    corredor_id = f"{nombre.lower()}_{apellido.lower()}"
    corredores[corredor_id] = {
        "nombre": nombre,
        "apellido": apellido,
        "edad": edad,
        "nacionalidad": nacionalidad,
        "equipo": equipo,
        "numero": numero,
        "año_inicio": año_inicio
    }
    print(f"Corredor {nombre} {apellido} agregado exitosamente.")

def remover_corredor(corredores):
    nombre = input("Ingrese el nombre del corredor a remover: ")
    apellido = input("Ingrese el apellido del corredor a remover: ")
    corredor_id = f"{nombre.lower()}_{apellido.lower()}"
    
    if corredor_id in corredores:
        del corredores[corredor_id]
        print(f"Corredor {nombre} {apellido} removido exitosamente.")
    else:
        print(f"No se encontró al corredor {nombre} {apellido}.")

def mostrar_corredores(corredores):
    if not corredores:
        print("No hay corredores registrados.")
        return
    
    print("\nLista de corredores de F1:")
    for corredor_id, info in corredores.items():
        print(f"\nCorredor: {info['nombre']} {info['apellido']}")
        for key, value in info.items():
            if key not in ['nombre', 'apellido']:
                print(f"  {key.capitalize()}: {value}")

def main():
    corredores = {}
    
    while True:
        print("\n--- Menú de Gestión de Corredores F1 ---")
        print("1. Agregar corredor")
        print("2. Remover corredor")
        print("3. Mostrar corredores")
        print("4. Salir")
        
        opcion = input("Seleccione una opción: ")
        
        if opcion == "1":
            agregar_corredor(corredores)
        elif opcion == "2":
            remover_corredor(corredores)
        elif opcion == "3":
            mostrar_corredores(corredores)
        elif opcion == "4":
            print("Gracias por usar el programa. ¡Hasta luego!")
            break
        else:
            print("Opción no válida. Por favor, intente de nuevo.")

if __name__ == "__main__":
    main()