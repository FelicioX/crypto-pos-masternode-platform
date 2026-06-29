# Crypto PoS Masternode Platform

An open-source cryptocurrency staking platform designed for managing **Proof-of-Stake (PoS)** and **Masternode** assets through a unified web interface.

Originally developed as the **EcoStake Pool**, this platform provided automated reward distribution, wallet management, deposit and withdrawal processing, staking cycles, and an administration dashboard supporting multiple blockchain networks.

This repository preserves the original source code and architecture as part of a software engineering and blockchain infrastructure portfolio.

---

## Overview

The platform was designed to simplify participation in Proof-of-Stake and Masternode cryptocurrencies by allowing users to deposit supported coins into a shared staking pool and automatically receive staking rewards proportional to their holdings.

Main features include:

- Multi-currency PoS and Masternode support
- User authentication and account management
- Cryptocurrency deposits and withdrawals
- Wallet integration
- Automated staking reward distribution
- Masternode management
- Administrative dashboard
- Coin management
- Reward history
- Transaction history
- Responsive web interface

---

## Screenshots

### Landing Page

<img width="1341" height="627" alt="4" src="https://github.com/user-attachments/assets/44c7ac24-623b-4d4e-bf80-1708c54127f4" />

### Supported Cryptocurrencies

The platform was designed to support dozens of Proof-of-Stake and Masternode cryptocurrencies simultaneously.

<img width="1333" height="577" alt="3" src="https://github.com/user-attachments/assets/428a757c-465c-4d4c-b2e8-a5e385d38045" />

### User Dashboard

<img width="1359" height="635" alt="2 (4)" src="https://github.com/user-attachments/assets/c4da7048-a2a1-4fc5-9e46-b2f3b2256582" />

---

## Main Features

### User System

- User registration
- Secure authentication
- Password recovery
- Account validation

### Wallet Management

- Deposit addresses
- Withdrawal requests
- Balance management
- Transaction history

### Proof-of-Stake Pool

- Automated staking cycles
- Reward calculation
- Reward distribution
- Multi-coin staking

### Masternode Support

- Masternode monitoring
- Masternode rewards
- Collateral management

### Administration

- Coin management
- User management
- Deposit approval
- Withdrawal approval
- Statistics dashboard
- Platform settings

---

## Technologies

Backend

- PHP
- MySQL
- AJAX
- JavaScript
- jQuery

Frontend

- HTML5
- CSS3
- Bootstrap
- SCSS

Infrastructure

- Apache
- Linux
- Wallet RPC Integration
- Cryptocurrency Daemons

---

## Repository Structure

```
ajax/
css/
images/
js/
scss/
vendor/

dashboard.php
login.php
register.php
index.php
README.md
LICENSE
```

---

## Supported Blockchain Features

- Proof-of-Stake (PoS)
- Masternodes
- Wallet RPC communication
- Reward distribution
- Deposit processing
- Withdrawal processing
- Multi-wallet support

Proof-of-Stake is a blockchain consensus mechanism where validators secure the network by staking cryptocurrency instead of performing energy-intensive mining, providing an efficient alternative to Proof-of-Work. :contentReference[oaicite:0]{index=0}

---

## Database

The original production MySQL database is **not included** in this repository.

The production environment contained operational data such as:

- User accounts
- Wallet balances
- Deposits
- Withdrawals
- Reward history
- Staking cycles
- Platform statistics

It has been intentionally omitted from the public repository to preserve historical operational data and follow good security practices.

---

## Installation

Clone the repository

```bash
git clone https://github.com/FelicioX/crypto-pos-masternode-platform.git
```

Move the project to your web server directory.

Configure your database connection.

Configure wallet RPC credentials for supported cryptocurrencies.

Start Apache and MySQL.

Access:

```
http://localhost/
```

---

## Requirements

- PHP 7.x
- MySQL / MariaDB
- Apache or Nginx
- Wallet daemon(s) with RPC enabled
- Linux or Windows

---

## Security

This repository is intended for educational and historical purposes.

Sensitive production information, credentials and operational database contents have been removed before publication.

---

## License

This project is distributed under the MIT License.

See the LICENSE file for details.

---

## Historical Context

EcoStake Pool operated as a multi-currency cryptocurrency staking platform supporting numerous Proof-of-Stake and Masternode blockchain projects through a centralized management interface.

This repository preserves the application's architecture and implementation as a reference for blockchain infrastructure, web development and cryptocurrency platform engineering.
