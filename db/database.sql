DROP DATABASE IF EXISTS espacojb;
CREATE DATABASE espacojb CHARACTER SET utf8 COLLATE utf8_general_ci;
USE espacojb;

CREATE TABLE users (
    uid INT PRIMARY KEY AUTO_INCREMENT,
    udate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    photo VARCHAR(255),
    birth DATE,    
    bio TEXT,    
    type ENUM('admin', 'author', 'moderator', 'user') DEFAULT 'user',
    last_login DATETIME,    
    ustatus ENUM('online', 'offline', 'deleted') DEFAULT 'online'
);

INSERT INTO users (        
        uid,
        name,
        email,
        password,
        photo,
        birth,
        bio,
        type
    )
VALUES (        
        '1',
        'Joca da Silva',
        'joca@silva.com',        
        SHA1('senha123'),        
        'https://randomuser.me/api/portraits/men/14.jpg',        
        '1990-12-14',
        'Pintor, programador, escultor e enrolador.',        
        'author'
    ),   
    (
        '2',
        'Marineuza Siriliano',
        'mari@neuza.com',
        SHA1('senha123'),
        'https://randomuser.me/api/portraits/women/72.jpg',
        '2002-03-21',
        'Escritora, montadora, organizadora e professora.',
        'author'
    ),
    (
        '3',
        'Hemengarda Sirigarda',
        'hemen@garda.com',
        SHA1('senha123'),
        'https://randomuser.me/api/portraits/women/20.jpg',
        '2004-08-19',
        'Sensitiva, intuitiva, normativa e omissiva.',
        'author'
    ),
    (
        '4',
        'Setembrino Trocatapas',
        'set@brino.com',
        SHA1('senha123'),
        'https://randomuser.me/api/portraits/men/20.jpg',
        '1979-02-03',
        'Um dos maiores inimigos do Pernalonga.',
        'author'
    );

CREATE TABLE articles (
    aid INT PRIMARY KEY AUTO_INCREMENT,
    adate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    author INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    content LONGTEXT NOT NULL,
    thumbnail VARCHAR(255) NOT NULL,
    resume VARCHAR(255) NOT NULL,
    astatus ENUM('online', 'offline', 'deleted') DEFAULT 'online',
    views INT DEFAULT 0,
    FOREIGN KEY (author) REFERENCES users (uid)
);

INSERT INTO articles (
        author,
        title,
        content,
        thumbnail,
        resume
    )
VALUES (
        '1',
        'Por que as folhas são verdes',
        '<h2>Título de teste</h2><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quia provident reiciendis earum, tenetur reprehenderit iure ipsum fugit praesentium alias deserunt sed maiores id rerum odio delectus perferendis voluptatum totam!</p><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero hic, modi pariatur culpa animi cum! Consequatur, odit! Repudiandae, dolorem temporibus, quaerat, unde enim error eum minus praesentium libero quibusdam consequuntur.</p><img src="https://picsum.photos/200/200" alt="Imagem aleatória." /><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia recusandae illum aliquam aperiam, laborum fugiat quos sunt expedita culpa! Minima harum mollitia aperiam nihil dolorem animi accusantium quia maxime expedita.</p><h3>Lista de links:</h3><ul><li><a href="https://github.com/Luferat">GitHub do Fessô</a></li><li><a href="https://catabits.com.br">Blog do Fessô</a></li><li><a href="https://facebook.com/Luferat">Facebook do Fessô</a></li></ul><p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam commodi inventore nemo doloribus asperiores provident, recusandae maxime quam molestiae sapiente autem, suscipit perspiciatis. Numquam labore minima, accusamus vitae exercitationem quod!</p>',
        'https://picsum.photos/200',
        'Saiba a origem da cor verde nas folhas das arvores que tem folhas verdes.'
    ),
    (
        '2',
        'Por que os peixes nadam',
        '<h2>Título de teste</h2><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quia provident reiciendis earum, tenetur reprehenderit iure ipsum fugit praesentium alias deserunt sed maiores id rerum odio delectus perferendis voluptatum totam!</p><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero hic, modi pariatur culpa animi cum! Consequatur, odit! Repudiandae, dolorem temporibus, quaerat, unde enim error eum minus praesentium libero quibusdam consequuntur.</p><img src="https://picsum.photos/200/200" alt="Imagem aleatória." /><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia recusandae illum aliquam aperiam, laborum fugiat quos sunt expedita culpa! Minima harum mollitia aperiam nihil dolorem animi accusantium quia maxime expedita.</p><h3>Lista de links:</h3><ul><li><a href="https://github.com/Luferat">GitHub do Fessô</a></li><li><a href="https://catabits.com.br">Blog do Fessô</a></li><li><a href="https://facebook.com/Luferat">Facebook do Fessô</a></li></ul><p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam commodi inventore nemo doloribus asperiores provident, recusandae maxime quam molestiae sapiente autem, suscipit perspiciatis. Numquam labore minima, accusamus vitae exercitationem quod!</p>',
        'https://picsum.photos/199',
        'Alguns peixes nadam melhor que outros. Sabe por que?'
    ),
    (
        '2',
        'Quando as árvores tombam',
        '<h2>Título de teste</h2><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quia provident reiciendis earum, tenetur reprehenderit iure ipsum fugit praesentium alias deserunt sed maiores id rerum odio delectus perferendis voluptatum totam!</p><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero hic, modi pariatur culpa animi cum! Consequatur, odit! Repudiandae, dolorem temporibus, quaerat, unde enim error eum minus praesentium libero quibusdam consequuntur.</p><img src="https://picsum.photos/200/200" alt="Imagem aleatória." /><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia recusandae illum aliquam aperiam, laborum fugiat quos sunt expedita culpa! Minima harum mollitia aperiam nihil dolorem animi accusantium quia maxime expedita.</p><h3>Lista de links:</h3><ul><li><a href="https://github.com/Luferat">GitHub do Fessô</a></li><li><a href="https://catabits.com.br">Blog do Fessô</a></li><li><a href="https://facebook.com/Luferat">Facebook do Fessô</a></li></ul><p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam commodi inventore nemo doloribus asperiores provident, recusandae maxime quam molestiae sapiente autem, suscipit perspiciatis. Numquam labore minima, accusamus vitae exercitationem quod!</p>',
        'https://picsum.photos/198',
        'Quando uma arvore cai na floresta e ninguém vê, ela realmente caiu ou foi derrubada?'
    ),
    (
        '4',
        'Esquilos tropeçam no ar',
        '<h2>Título de teste</h2><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quia provident reiciendis earum, tenetur reprehenderit iure ipsum fugit praesentium alias deserunt sed maiores id rerum odio delectus perferendis voluptatum totam!</p><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero hic, modi pariatur culpa animi cum! Consequatur, odit! Repudiandae, dolorem temporibus, quaerat, unde enim error eum minus praesentium libero quibusdam consequuntur.</p><img src="https://picsum.photos/200/200" alt="Imagem aleatória." /><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia recusandae illum aliquam aperiam, laborum fugiat quos sunt expedita culpa! Minima harum mollitia aperiam nihil dolorem animi accusantium quia maxime expedita.</p><h3>Lista de links:</h3><ul><li><a href="https://github.com/Luferat">GitHub do Fessô</a></li><li><a href="https://catabits.com.br">Blog do Fessô</a></li><li><a href="https://facebook.com/Luferat">Facebook do Fessô</a></li></ul><p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam commodi inventore nemo doloribus asperiores provident, recusandae maxime quam molestiae sapiente autem, suscipit perspiciatis. Numquam labore minima, accusamus vitae exercitationem quod!</p>',
        'https://picsum.photos/201',
        'Bichinos fofinhos que podem transformar seu dia em um inferno de fofura.'
    ),
    (
        '3',
        'Impacto verde',
        '<h2>Título de teste</h2><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quia provident reiciendis earum, tenetur reprehenderit iure ipsum fugit praesentium alias deserunt sed maiores id rerum odio delectus perferendis voluptatum totam!</p><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero hic, modi pariatur culpa animi cum! Consequatur, odit! Repudiandae, dolorem temporibus, quaerat, unde enim error eum minus praesentium libero quibusdam consequuntur.</p><img src="https://picsum.photos/200/200" alt="Imagem aleatória." /><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia recusandae illum aliquam aperiam, laborum fugiat quos sunt expedita culpa! Minima harum mollitia aperiam nihil dolorem animi accusantium quia maxime expedita.</p><h3>Lista de links:</h3><ul><li><a href="https://github.com/Luferat">GitHub do Fessô</a></li><li><a href="https://catabits.com.br">Blog do Fessô</a></li><li><a href="https://facebook.com/Luferat">Facebook do Fessô</a></li></ul><p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam commodi inventore nemo doloribus asperiores provident, recusandae maxime quam molestiae sapiente autem, suscipit perspiciatis. Numquam labore minima, accusamus vitae exercitationem quod!</p>',
        'https://picsum.photos/202',
        'Não esqueça de todos os itens necessários para adentrar uma grande floresta.'
    ),
    (
        '3',
        'Cheiro de mato',
        '<h2>Título de teste</h2><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quia provident reiciendis earum, tenetur reprehenderit iure ipsum fugit praesentium alias deserunt sed maiores id rerum odio delectus perferendis voluptatum totam!</p><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero hic, modi pariatur culpa animi cum! Consequatur, odit! Repudiandae, dolorem temporibus, quaerat, unde enim error eum minus praesentium libero quibusdam consequuntur.</p><img src="https://picsum.photos/200/200" alt="Imagem aleatória." /><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia recusandae illum aliquam aperiam, laborum fugiat quos sunt expedita culpa! Minima harum mollitia aperiam nihil dolorem animi accusantium quia maxime expedita.</p><h3>Lista de links:</h3><ul><li><a href="https://github.com/Luferat">GitHub do Fessô</a></li><li><a href="https://catabits.com.br">Blog do Fessô</a></li><li><a href="https://facebook.com/Luferat">Facebook do Fessô</a></li></ul><p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam commodi inventore nemo doloribus asperiores provident, recusandae maxime quam molestiae sapiente autem, suscipit perspiciatis. Numquam labore minima, accusamus vitae exercitationem quod!</p>',
        'https://picsum.photos/203',
        'Conheça os melhores equipamentos para cortar sua grama de forma elegante e moderna.'
    );

CREATE TABLE comments (
    cid INT PRIMARY KEY AUTO_INCREMENT,
    cdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    cauthor INT NOT NULL,
    article INT NOT NULL,
    comment TEXT NOT NULL,
    cstatus ENUM('online', 'offline', 'deleted') DEFAULT 'online',
    FOREIGN KEY (cauthor) REFERENCES users (uid),
    FOREIGN KEY (article) REFERENCES articles (aid)
);

INSERT INTO comments (cauthor, article, comment)
VALUES (
        '1',
        '2',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quia provident reiciendis earum, tenetur reprehenderit iure ipsum.'
    ),
    (
        '2',
        '2',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quia provident reiciendis earum, tenetur reprehenderit iure ipsum.'
    ),
    (
        '4',
        '2',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quia provident reiciendis earum, tenetur reprehenderit iure ipsum.'
    ),
    (
        '3',
        '2',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quia provident reiciendis earum, tenetur reprehenderit iure ipsum.'
    ),
    (
        '2',
        '6',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quia provident reiciendis earum, tenetur reprehenderit iure ipsum.'
    ),
    (
        '2',
        '3',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo quia provident reiciendis earum, tenetur reprehenderit iure ipsum.'
    );

CREATE TABLE contacts (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    status ENUM ('sended', 'readed', 'responded', 'deleted') DEFAULT 'sended'
);