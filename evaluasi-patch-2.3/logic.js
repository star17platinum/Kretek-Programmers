for(var x = 1; x< 10; x++) {
    for(var y = 1; y<10; y++) {
        if(x==y||y+x==10||x==5||y==5) {
            document.write("*")
        } else document.write("_")
    }
    document.write("<br>")
}

for(var x = 0; x< 9; x++) {
    for(var y = 0; y<9; y++) {
        if (x>y) {
            document.write("*")
        } else document.write("_")
    }
    document.write("<br>")
}