# 3. Uso de Estructuras de Control 
def obtener_calificacion_valida():
    while True:
        try:
            calificacion = float(input("Ingresa una calificación (o presiona la tecla ENTER para terminar): "))
            if 0 <= calificacion <= 10:
                return calificacion
            else:
                print("Ingresa una calificación entre 0 y 10.")
        except ValueError:
            return None

def main():
    calificaciones = []
    print("Bienvenido al programa de calificaciones.")
    print("Ingresa las calificaciones de a una.")
    print("Para terminar de ingresar calificaciones presiona enter.")

    while True:
        calificacion = obtener_calificacion_valida()
        if calificacion is None:
            break
        calificaciones.append(calificacion)

    if not calificaciones:
        print("No se ingresaron calificaciones.")
        return

    calificacion_mas_alta = max(calificaciones)
    calificacion_mas_baja = min(calificaciones)
    promedio = sum(calificaciones) / len(calificaciones)

    print(f"Cantidad de calificaciones ingresadas: {len(calificaciones)}")
    print(f"Calificación más alta: {calificacion_mas_alta}")
    print(f"Calificación más baja: {calificacion_mas_baja}")
    print(f"Promedio de calificaciones: {promedio:.2f}")

if __name__ == "__main__":
    main()