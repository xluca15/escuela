import Link from 'next/link'

export default function Home() {
  return (
    <main className="flex min-h-screen flex-col items-center justify-center p-24">
      <h1 className="text-4xl font-bold mb-8">
        Bienvenido a Torneo Fútbol
      </h1>
      <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
        <Link 
          href="/matches" 
          className="p-4 border rounded-lg hover:bg-gray-100 transition-colors"
        >
          Ver Partidos
        </Link>
        <Link 
          href="/teams" 
          className="p-4 border rounded-lg hover:bg-gray-100 transition-colors"
        >
          Ver Equipos
        </Link>
      </div>
    </main>
  )
}