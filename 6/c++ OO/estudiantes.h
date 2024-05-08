#ifndef estudiantes_h
#define estudiantes_H
#include <iostream>
#include <string>
using namespace std;

    class CEstudiantes{
        private:
            int dia;
            int mes;
            int anio;
            int nota;
            string nombre;
            string apellido;
        public:
            CEstudiantes(int d, int m, int a, int n, string nom, string ape);
            CEstudiantes();
            ~CEstudiantes();
            int getDia();
            int getMes();
            int getAnio();
            int getNota();
            string getNombre();
            string getApellido();
            bool aprobado();
};
    CEstudiantes::CEstudiantes(int d, int m, int a, int n, string nom, string ape){
        dia = d;
        mes = m;
        anio = a;
        nota = n;
        nombre = nom;
        apellido = ape;
    }
CEstudiantes::CEstudiantes(){

}
CEstudiantes::~CEstudiantes(){
cout<<"\nBorrando Datos!!";
}
int CEstudiantes::getDia(){
    return dia;
}
int CEstudiantes::getMes(){
    return mes;
}
int CEstudiantes::getAnio(){
    return anio;
}
int CEstudiantes::getNota(){
    return nota;
}
string CEstudiantes::getNombre(){
    return nombre;
}
string CEstudiantes::getApellido(){
    return apellido;
}
bool CEstudiantes::aprobado(){
    return (nota >= 7) ?true : false;
}
#endif#ifndef estudiantes_h
#define estudiantes_H
#include <iostream>
#include <string>
using namespace std;

    class CEstudiantes{
        private:
            int dia;
            int mes;
            int anio;
            int nota;
            string nombre;
            string apellido;
        public:
            CEstudiantes(int d, int m, int a, int n, string nom, string ape);
            CEstudiantes();
            int getDia();
            int getMes();
            int getAnio();
            int getNota();
            string getNombre();
            string getApellido();
            bool aprobado();
};
    CEstudiantes::CEstudiantes(int d, int m, int a, int n, string nom, string ape){
        dia = d;
        mes = m;
        anio = a;
        nota = n;
        nombre = nom;
        apellido = ape;
    }
CEstudiantes::CEstudiantes(){

}
int CEstudiantes::getDia(){
    return dia;
}
int CEstudiantes::getMes(){
    return mes;
}
int CEstudiantes::getAnio(){
    return anio;
}
int CEstudiantes::getNota(){
    return nota;
}
string CEstudiantes::getNombre(){
    return nombre;
}
string CEstudiantes::getApellido(){
    return apellido;
}
bool CEstudiantes::aprobado(){
    return (nota >= 7) ?true : false;
}
#endif