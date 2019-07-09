var hero = {
    _name: 'John Doe',
    getSecretIdentity: function(){
        return this._name;
    }
}

var stoleSecretIdentity = hero.getSecretIdentity;

// "What this code will output:"
console.log(stoleSecretIdentity()); // output :
console.log(hero.getSecretIdentity()); // output :

// what is wrong ?




// "How to fix it"

