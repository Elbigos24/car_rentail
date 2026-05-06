
import Dashboard from './views/dashoboard'
import "./App.css"
import { BrowserRouter, Routes, Route } from 'react-router-dom'
import Contacto from './views/Contacto'



function App() {
  return (
    
      <BrowserRouter>
        <Routes>
          <Route path='/' element={<Dashboard />} />
          <Route path='/contacto' element={<Contacto />} />
        </Routes>
      </BrowserRouter>
      

    
  )
}

export default App
