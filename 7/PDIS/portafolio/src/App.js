import React, { useState, useEffect } from 'react';
import { motion } from 'framer-motion';
import { ChevronDown, Mail, Phone, MapPin, Cake, Book, Briefcase, Car } from 'lucide-react';
import { FaReact, FaNodeJs } from 'react-icons/fa';
import { SiIonic, SiTypescript, SiNextdotjs } from 'react-icons/si';

const CV = () => {
  const [activeSection, setActiveSection] = useState('personal');
  const [isVisible, setIsVisible] = useState({});

  useEffect(() => {
    const handleScroll = () => {
      const sections = ['personal', 'educacion', 'experiencia', 'skills'];
      const scrollPosition = window.scrollY;

      sections.forEach(section => {
        const element = document.getElementById(section);
        if (element) {
          const { offsetTop, offsetHeight } = element;
          if (scrollPosition >= offsetTop && scrollPosition < offsetTop + offsetHeight) {
            setActiveSection(section);
          }
        }
      });
    };

    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  useEffect(() => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          setIsVisible(prev => ({ ...prev, [entry.target.id]: entry.isIntersecting }));
        });
      },
      { threshold: 0.1 }
    );

    const sections = document.querySelectorAll('section');
    sections.forEach((section) => observer.observe(section));

    return () => sections.forEach((section) => observer.unobserve(section));
  }, []);

  const fadeInVariants = {
    hidden: { opacity: 0, y: 20 },
    visible: { opacity: 1, y: 0 }
  };

  const skills = [
    { name: 'React', icon: <FaReact /> },
    { name: 'Ionic', icon: <SiIonic /> },
    { name: 'TypeScript', icon: <SiTypescript /> },
    { name: 'Next.js', icon: <SiNextdotjs /> },
    { name: 'Node.js', icon: <FaNodeJs /> }
  ];

  return (
    <div className="bg-gray-100 min-h-screen">
      <nav className="bg-white shadow-md fixed top-0 left-0 right-0 z-10">
        <ul className="flex justify-center space-x-4 p-4">
          {['Personal', 'Educacion', 'Experiencia', 'Habilidades'].map((item) => (
            <li key={item}>
              <a
                href={`#${item.toLowerCase()}`}
                className={`text-gray-600 hover:text-gray-900 ${
                  activeSection === item.toLowerCase() ? 'font-bold' : ''
                }`}
              >
                {item}
              </a>
            </li>
          ))}
        </ul>
      </nav>

      <section id="personal" className="min-h-screen flex items-center justify-center bg-blue-50 pt-20">
        <motion.div
          className="text-center"
          initial="hidden"
          animate={isVisible.personal ? "visible" : "hidden"}
          variants={fadeInVariants}
          transition={{ duration: 0.5 }}
        >
          <h1 className="text-4xl font-bold mb-4">Luca Nahuel Lopez</h1>
          <p className="text-xl mb-8">Desarrollador Web</p>
          <div className="flex flex-col items-center space-y-2">
            <div className="flex items-center">
              <Mail className="mr-2" size={18} />
              <span>lopezluca223@gmail.com</span>
            </div>
            <div className="flex items-center">
              <Phone className="mr-2" size={18} />
              <span>(0223) 532-0370</span>
            </div>
            <div className="flex items-center">
              <MapPin className="mr-2" size={18} />
              <span>La rioja 4451, Argentina</span>
            </div>
            <div className="flex items-center">
              <Cake className="mr-2" size={18} />
              <span>06/09/2005 (19 años)</span>
            </div>
          </div>
        </motion.div>
      </section>

      <section id="educacion" className="min-h-screen flex items-center justify-center bg-gray-50 pt-20">
        <motion.div
          className="text-center"
          initial="hidden"
          animate={isVisible.educacion ? "visible" : "hidden"}
          variants={fadeInVariants}
          transition={{ duration: 0.5 }}
        >
          <h2 className="text-3xl font-bold mb-8">Educación</h2>
          <div className="space-y-6">
            <div>
              <h3 className="text-xl font-semibold">Escuela de Educación Secundaria Tecnica n5</h3>
              <p>Secundario completo</p>
            </div>
            <div>
              <h3 className="text-xl font-semibold">Instituto Inmaculada Concepción</h3>
              <p>Primario completo</p>
            </div>
          </div>
        </motion.div>
      </section>

      <section id="experiencia" className="min-h-screen flex items-center justify-center bg-blue-50 pt-20">
        <motion.div
          className="text-center"
          initial="hidden"
          animate={isVisible.experiencia ? "visible" : "hidden"}
          variants={fadeInVariants}
          transition={{ duration: 0.5 }}
        >
          <h2 className="text-3xl font-bold mb-8">Experiencia Laboral</h2>
          <div className="space-y-6">
            <div>
              <h3 className="text-xl font-semibold">Sector Net</h3>
              <p>Técnico</p>
              <p>26/08/2024 - Presente</p>
              <p>Rivadavia 2241</p>
            </div>
            <div>
              <h3 className="text-xl font-semibold">Tranqui</h3>
              <p>Aplicación contra el suicidio</p>
            </div>
            <div>
              <h3 className="text-xl font-semibold">Calderas Lopez</h3>
              <p>Peón</p>
              <p>04/03/2024 - 26/08/2024</p>
              <p>Diagonal Elpidio Gonzales 5455</p>
            </div>
          </div>
        </motion.div>
      </section>

      <section id="habilidades" className="min-h-screen flex items-center justify-center bg-gray-50 pt-20">
        <motion.div
          className="text-center"
          initial="hidden"
          animate={isVisible.habilidades ? "visible" : "hidden"}
          variants={fadeInVariants}
          transition={{ duration: 0.5 }}
        >
          <h2 className="text-3xl font-bold mb-8">Habilidades y Información Adicional</h2>
          <div className="grid grid-cols-2 md:grid-cols-3 gap-4 mb-8">
            {skills.map((skill) => (
              <div key={skill.name} className="bg-white p-4 rounded-lg shadow-md flex items-center justify-center space-x-2">
                <span>{skill.name}</span>
                <span className="text-2xl">{skill.icon}</span>
              </div>
            ))}
          </div>
          <div className="space-y-4">
            <div className="flex items-center justify-center">
              <Car className="mr-2" size={18} />
              <span>Registro de conducir: Categoría A1</span>
            </div>
            <div className="flex items-center justify-center">
              <Briefcase className="mr-2" size={18} />
              <span>CUIL: 20-46896982-6</span>
            </div>
          </div>
        </motion.div>
      </section>

      <footer className="bg-gray-800 text-white text-center py-4">
        <p>&copy; 2024 Luca Nahuel Lopez. Todos los derechos reservados.</p>
      </footer>

      <motion.div
        className="fixed bottom-4 right-4 bg-blue-500 text-white p-2 rounded-full cursor-pointer"
        whileHover={{ scale: 1.1 }}
        whileTap={{ scale: 0.9 }}
        onClick={() => window.scrollTo({ top: 0, behavior: 'smooth' })}
      >
        <ChevronDown size={24} className="transform rotate-180" />
      </motion.div>
    </div>
  );
};

export default CV;