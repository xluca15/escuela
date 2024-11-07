import Link from 'next/link'

export default function NotFound() {
  return (
    <div className="flex min-h-screen flex-col items-center justify-center p-24">
      <h2 className="text-3xl font-bold mb-4">Página no encontrada</h2>
      <p className="mb-4">No pudimos encontrar la página que buscas.</p>
      <Link 
        href="/"
        className="text-blue-500 hover:text-blue-700 transition-colors"
      >
        Volver al inicio
      </Link>
    </div>
  )
}