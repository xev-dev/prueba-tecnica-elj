export async function registerDog(dogInfo){
    const response = await fetch('http://localhost:8000/api/dog', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(dogInfo),
    })
    return await response.json(); 
}

export async function fetchDogs(){
  const response = await fetch('http://localhost:8000/api/dog', {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
      }
  })
  const json = await response.json();
  return json.res;
}




