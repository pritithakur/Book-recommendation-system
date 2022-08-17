from flask import Flask,render_template, request
import numpy as np
import pickle

#load pickle files here
popular= pickle.load(open('popular.pkl','rb'))
history=pickle.load(open('history.pkl','rb'))
mystery=pickle.load(open('mystery.pkl','rb'))
psycho=pickle.load(open('psycho.pkl','rb'))
detective=pickle.load(open('detective.pkl','rb'))
western=pickle.load(open('western.pkl','rb'))
st = pickle.load(open('st.pkl','rb'))
books = pickle.load(open('books.pkl','rb'))
funny = pickle.load(open('funny.pkl','rb'))
senti = pickle.load(open('senti.pkl','rb'))

similarity_scores = pickle.load(open('similarity_scores.pkl','rb'))

app = Flask(__name__)
@app.route('/')
# function for index page
def index():
    return render_template('index.html',
    book_name = list(popular['Book-Title'].values),
    author= list(popular['Book-Author'].values),
    image = list(popular['Image-URL-M'].values),
    votes= list(popular['Rating_Num'].values),
    rating = list(popular['Ratings_Avg'].values))

@app.route('/recommend')
def recommend_ui():
    return render_template('recommend.html')

@app.route('/history')
def ui():
    return render_template('history.html',
    book_name = list(history['Book-Title'].values),
    author= list(history['Book-Author'].values),
    image = list(history['Image-URL-M'].values),
    )

@app.route('/mystery')
def myt():
    return render_template('mystery.html',
    book_name = list(mystery['Book-Title'].values),
    author= list(mystery['Book-Author'].values),
    image = list(mystery['Image-URL-M'].values),
    )

@app.route('/psycho')
def psy():
    return render_template('psycho.html',
    book_name = list(psycho['Book-Title'].values),
    author= list(psycho['Book-Author'].values),
    image = list(psycho['Image-URL-M'].values),
    )

@app.route('/detective')
def det():
    return render_template('detective.html',
    book_name = list(detective['Book-Title'].values),
    author= list(detective['Book-Author'].values),
    image = list(detective['Image-URL-M'].values),
    )

@app.route('/western')
def west():
    return render_template('western.html',
    book_name = list(western['Book-Title'].values),
    author= list(western['Book-Author'].values),
    image = list(western['Image-URL-M'].values),
    )

@app.route('/funny')
def fun():
    return render_template('funny.html',
    book_name = list(funny['Book-Title'].values),
    author= list(funny['Book-Author'].values),
    image = list(funny['Image-URL-M'].values),
    )

@app.route('/senti')
def sent():
    return render_template('senti.html',
    book_name = list(senti['Book-Title'].values),
    author= list(senti['Book-Author'].values),
    image = list(senti['Image-URL-M'].values),
    )

@app.route('/login')
def login():
    return render_template('user/login.php')

@app.route('/recommend_books',methods=['post'])

def recommend():
    user_input = request.form.get('user_input')
    match = np.where(st.index==user_input) 
   
    if len(match[0])==0:
        return render_template('error.html')
    else:
        print("Found")
        
        
        
    index = np.where(st.index==user_input)[0][0]

        
    
    
    
    #return a sorted list of similar book i.e 0 with other books ...key lamba will sort similarity with reverse order#and top will return maximum 5 similar boooks
    similar_items = sorted(list(enumerate(similarity_scores[index])),key=lambda x:x[1],reverse=True)[0:6]
    
    data = []
    for i in similar_items:
        item = []
        temp = books[books['Book-Title'] == st.index[i[0]]]
        item.extend(list(temp.drop_duplicates('Book-Title')['Book-Title'].values))
        item.extend(list(temp.drop_duplicates('Book-Title')['Book-Author'].values))
        item.extend(list(temp.drop_duplicates('Book-Title')['Image-URL-M'].values))
        
        data.append(item)
    return render_template('recommend.html', data=data)

if __name__=='__main__':
    app.run(debug=True)
