#include<iostream>
#include<string>
#include"estudiantes.h"

void desplegarDatos(CEstudiantes *arreglo, int cantP){
    cout<<"\n\nDesplegando datos de los Alumnos\n\n";
        for(int i = 0; i < cantP; i++){
            cout<<"\nDia: "<<arreglo[i].getDia();
            cout<<"\nMes: "<<arreglo[i].getMes();
            cout<<"\nAnio: "<<arreglo[i].getAnio();
            cout<<"\nNota: "<<arreglo[i].getNota();
            cout<<"\nNombre: "<<arreglo[i].getNombre();
            cout<<"\nApellido: "<<arreglo[i].getApellido();
            cout<<"\n\nLa Nota del Alumno es = "<<arreglo[i].getNota();
                if(arreglo[i].getAnio() == 2022){
                    if(arreglo[i].aprobado()){
                        cout<<"\nEste alumno aprobo con = "<<arreglo[i].getNota();
                    }
                }
        }
}
int main(){
    string apellido, nombre;
    int dia, mes, anio, nota, cantP;
    cout<<"Ingrese la cantidad de alumnos: "; cin>>cantP;
    CEstudiantes *personas = new CEstudiantes[cantP];
        for(int i = 0; i<cantP; i++){
            cout<<"\nIngrese Nombre:  "; cin>>nombre;
            cout<<"\nIngrese Apellido:  "; cin>>apellido;        
            cout<<"\nIngrese Dia:  "; cin>>dia;
            cout<<"\nIngrese Mes:  "; cin>>mes;
            cout<<"\nIngrese Anio:  "; cin>>anio;
            cout<<"\nIngrese Nota:  "; cin>>nota;
            personas[i] = CEstudiantes(dia, mes, anio, nota, nombre, apellido);
        }
            desplegarDatos(personas, cantP);
    return 0;
}