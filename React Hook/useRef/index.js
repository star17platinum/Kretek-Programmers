import React, { useState, useRef, useEffect } from 'react';

export default function Ref() {
  const [name, setName] = useState('');
  const renderCount = useRef(0);
  const inputRef = useRef();
  const prevName = useRef('');

  useEffect(() => {
    return (prevName.current = name);
  }, [name]); // akan menyimpan nilai sebelumnya

  function focus() {
    inputRef.current.focus();
    inputRef.current.value = 'Halo';
  }

  return (
    <>
      <input
        ref={inputRef}
        value={name}
        onChange={(e) => setName(e.target.value)}
      />
      <div>
        My name is {name}. Before that, my name is {prevName.current}
      </div>
      <button onClick={focus}>Focus to Input</button>
    </>
  );
}