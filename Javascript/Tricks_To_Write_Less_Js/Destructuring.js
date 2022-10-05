// DESTRUCTURING

const post = {
  data: {
    id: 1,
    title: "Post 1",
    text: "Hello World",
    author: "Scalipsum",
  },
};

// const id = post.data.id;
// const title = post.data.title;
// const text = post.data.text;
// const author = post.data.author;

// ===>
const { id, title, text, author } = post.data;
console.log(id, title, text, author);
