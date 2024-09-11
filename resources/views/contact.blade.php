<x-layouts.hoofdtemplate>
    <h1>Contact</h1>
    <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande
        formulier in of stuur ons een e-mail op info@smart-solutions.nl. We proberen zo
        snel mogelijk te reageren!
    </p>
    <div class="form-group">
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="subject">Onderwerp:</label>
        <input type="text" id="subject" name="subject" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="message">Bericht:</label>
        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Verstuur</button>
</x-layouts.hoofdtemplate>
