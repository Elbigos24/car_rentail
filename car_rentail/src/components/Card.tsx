import { useState } from 'react'

export default function Card() {
    var cont:number=0
    const [contador, setContador]= useState(10)
    const aumentar=()=>{
        cont++
        console.log('hola mundo',cont)
        setContador(contador+1)
    }
    return (
        <>
            <h1>Card {contador}</h1>
            <button onClick={aumentar}>hola mundo</button>
            
        </>
  );
}