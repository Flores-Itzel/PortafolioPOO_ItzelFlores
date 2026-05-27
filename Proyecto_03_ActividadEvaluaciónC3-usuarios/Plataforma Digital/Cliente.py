from Usuario import Usuario

class Cliente(Usuario):
    def __init__(self, nombre, email, puntos=0):
        super().__init__(nombre, email)
        self.puntos = puntos

    def acceso_sistema(self):
        print("Acceso de cliente")
        print("Puntos:", self.puntos)

    def saludar(self):
        print("Hola, soy", self.nombre, "y tengo", self.puntos, "puntos")

    def mostrar_datos(self):
        super().mostrar_datos()
        print("Puntos:", self.puntos)