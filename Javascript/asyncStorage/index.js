import AsyncStorage from '@react-native-async-storage/async-storage'

const getItem = async (key) => {
    try {
        const value = await AsyncStorage.getItem(key)
        console.log('getItem', key, value)
        return value
    } catch (e) {
        console.error(e)
    }
}

const setItem = async (key, value) => {
    try {
        await AsyncStorage.setItem(key, value)
        console.log('setItem', key, value)
    } catch (e) {
        console.error(e)
    }
}

const removeItem = async (key) => {
    try {
        await AsyncStorage.removeItem(key)
        console.log('removeItem', key)
    } catch (e) {
        console.error(e)
    }
}

const clear = async () => {
    try {
        await AsyncStorage.clear()
        console.log('clear AsyncStorage')
    } catch (e) {
        console.error(e)
    }
}

export { getItem, setItem, removeItem, clear }
