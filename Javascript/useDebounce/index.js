import { useEffect, useState } from 'react'

export const useDebounce = (value, delay = 500) => {
    const [value, setValue] = useState(value)

    useEffect(() => {
        const handleDebounce = setTimeout(() => {
            setValue(value)
        }, delay)

        return () => {
            clearTimeout(handleDebounce)
        }
    }, [value, delay])

    return value
}
