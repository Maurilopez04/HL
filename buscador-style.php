<style>
.searchBox {
    margin: auto;
    display: flex;
    max-width: 410px;
    align-items: center;
    justify-content: space-between;
    background: white;
    border-radius: 50px;
    position: relative;
}
.searchButton {
    color: white;
    position: absolute;
    right: 0px;
    width: 10%;
    height: 45px;
    border-radius: 52%;
    border-start-start-radius: 0;
    border-end-start-radius: 0;
    background: var(--gradient-2, linear-gradient(90deg, darkred 0%, red 100%));
    border: 0;
    display: inline-block;
    transition: all 300ms cubic-bezier(0.23, 1, 0.32, 1);
}
button:hover {
    color: #fff;
    background-color: #1a1a1a;
    box-shadow: rgba(0, 0, 0, 0.5) 0 10px 20px;
}
button:active {
    box-shadow: none;
    transform: translateY(0);
}
.searchInput {
    border: none;
    width: 90%;
    background: none;
    outline: none;
    color: white;
    font-size: 15px;
    padding: 10px 26px 10px 26px;
    border-radius: 50px;
} </style>