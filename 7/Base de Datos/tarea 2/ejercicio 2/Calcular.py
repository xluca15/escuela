productos = {
    "manzana": 0.5,
    "pera": 0.6,
    "naranja": 0.7
}

def agregar_producto(inventario, nombre, precio):
    inventario[nombre] = precio

def remover_producto(inventario, nombre):
    if nombre in inventario:
        del inventario[nombre]

def calcular_total(inventario, compra):
    total = 0
    for producto, cantidad in compra.items():
        if producto in inventario:
            total += inventario[producto] * cantidad
        else:
            print(f"Producto '{producto}' no encontrado en el inventario.")
    return total

# Agregar un nuevo producto
agregar_producto(productos, "uva", 0.8)

# Mostrar inventario actualizado
print("Inventario actualizado:")
for producto, precio in productos.items():
    print(f"{producto}: ${precio:.2f}")

# Remover un producto
remover_producto(productos, "pera")

# Mostrar inventario después de remover
print("\nInventario después de remover 'pera':")
for producto, precio in productos.items():
    print(f"{producto}: ${precio:.2f}")

# Calcular total de una compra
compra_ejemplo = {"manzana": 3, "naranja": 2, "uva": 1}
total = calcular_total(productos, compra_ejemplo)
print(f"\nTotal a pagar: ${total:.2f}")