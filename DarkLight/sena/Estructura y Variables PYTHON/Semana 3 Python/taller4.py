#TALLER 4:PYTHON
#AUTOR(A): ING. ALEJANDRO
#FECHA : 10/10/2023


from datetime import date

hoy = date.today()  #fecha actual

print("Hoy es el dia: ",hoy)

a = int(input("digite el valor de A:"))
b = int(input("digite el valor de B:"))


if a>=b:
    
    print("A es mayor o igual a B")
    
else:
    
    print("A es menor que B")
    
print()

curso1 = "Requerimientos"
curso2 = "Algoritmos"

print("el curso1 es:", curso1)

print("el curso2 es:", curso2)


if curso1 == "Requerimientos" and curso2 == "Algoritmos":
    
    
    print("Usted estudia programacion de software")
    
else:
    
    print("usted estudia otro programa diferente a programacion de Software")

print()

print("*** Final del analisis del programa en programacion SENA ***")

print()


frase = input("digite una oracion: ")

print("la frase en mayuscula es :", frase.upper())

longitud = len(frase)

print("la longitud de la frase es:", len(frase),"caracteres")

if longitud>10:
    print("la frase contiene mas de 10 caracteres")
else:
    print("la frase contiene menos de 11 caracteres")
#Fin del programa semana 3 taller 1
print()
print("FIN")

