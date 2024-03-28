{literal}
<style>
  form {
    display: flex;
    padding: 8px;
    gap: 16px;
    background-color: #f0f7ff;
    border-radius: 10px;
    width: clamp(300px, 50%, 600px);
    margin: 0 calc((100% - clamp(300px, 50%, 600px)) / 2);
    flex-wrap: wrap;

    margin-top: 32px;
  }

  label {
    display: block;
    color: #333;
    margin-bottom: -12px;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"],
  select {
    width: clamp(200px, 100%, 200px);
    padding: 4px;
    border: 1px solid #b3d1ff;
    border-radius: 5px;
    box-sizing: border-box;
  }

  select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg fill="%23333" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>');
    background-repeat: no-repeat;
    background-position: right 10px top 50%;
    background-size: 24px auto;
  }

  input[type="submit"] {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }

  button {
    width: 100%;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #0056b3;
  }
</style>
{/literal}
