# useRef(initialValue)

useRef ini digunakan hampir persis cara menggunakan useState, bersifat *mutable*. 

useRef mengembalikan objek ref yang dapat diubah yang properti .currentnya diinisialisasi ke argumen yang diteruskan (initialValue). **Objek yang dikembalikan akan bertahan selama masa pakai penuh komponen.**

### Study Case 1

``` javascript
    function case1 () {
        const [renderCount, setRenderCount] = useState(0);

        return (
            <>
                <input value={name} onChange={(e) => setName(e.target.value)} />
                <div>My name is {name}</div>
                <div>I rendered {renderCount} times</div>
            </>
        )
    }
```

pada kasus diatas, kita mau berapa kali kita merender ulang dengan cara memasukan input di `<input>`

bila seperti biasanya kita menggunakan `state` baru diubah di `useEffect() ` maka yang terjadi ***infinite loop*** seperti contoh dibawah ini
``` javascript
        useEffect(() => {
            setRenderCount((prevRender) => prevRender + 1);
        });
```

maka dari itu digunakan useRef dan mempertahankan value tersebut

**Solution**
``` javascript
const renderCount = useRef(0);

useEffect(() => {
    renderCount.current = renderCount.current + 1;
  });

  return (
      // ...
            <div>I rendered {renderCount.current} times</div>
      //...
  )
```

### Study Case 2

kasus yang kali ini kita akan membuat tombol yang dimana akan `focus()` di kolom input 
``` javascript
function reFocus() {
    const inputRef = useRef();

    function focus() {
        inputRef.current.focus();
        inputRef.current.value = 'Halo';
    }

    return (
        <> 
            <input ref={inputRef} value={name} onChange={(e) => setName(e.target.value)}/>
            <button onClick={focus}>Focus to Input</button>
        </>
    )
}
```

### Study Case 3

Kasus kali ini kita akan membuat dimana "state" tersebut menyimpan value sebelumnya

``` javascript
function Before() {
    const [name, setName] = useState('')
    const prevName = useRef('');

    useEffect(() => {
        prevName.current = name
    }, [name])

    return (
        <input ref={inputRef} value={name} onChange={(e) => setName(e.target.value)}/>
        <div>
            My name is {name}. Before that, my name is {prevName.current}
        </div>
    )
}
```

state `name` akan mengisi value **sekarang** sedangkan state `prevName` mengisi value dari `name`

original source(https://github.com/itzmail/Pustaka_RN)