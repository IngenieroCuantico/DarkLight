#TALLER 2:PYTHON
#AUTOR(A): ING. ALEJANDRO
#FECHA : 04/10/2023


from datetime import date

hoy = date.today()  #fecha actual

print("Hoy es el dia: ",hoy)

a= int(input("Digite el primer numero :"))
b= int(input("Digite el segundo numero :"))
c= int(input("Digite el tercer numero :"))

x = [a, b, c]

print("El valor maximos es:", max(x))
print("el valor minimo es: ",min(x))
print("la suma de los 3 numeros es:",sum(x))
print()

z=float(input("digite un numero con decimales: "))

redondo = round(z)
print("El valor de ",z, " redondeado es: ",redondo)
print()
frase = input ("digite una oracion : ")
print("la frase en mayuscula es: ",frase.upper())
print("la frase en minuscula es: ", frase.lower())
print("la frase con mayucsula inicial es:", frase.capitalize())
print("la frase con palabras en mayusculas es: ", frase.title())
print("la longitud de la frase es:", len(frase)," caracteres ")
print()
print("FIN")

suma = a+b
resta = a-b
producto= a*b
division = a/b

print("la suma es =",suma)
print("la resta es =",resta)
print("la multiplicacion es =",producto)
print("la division es =",division)
print("FIN")